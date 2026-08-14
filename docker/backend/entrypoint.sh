#!/bin/bash
set -e

PROJECT_ROOT="/var/www/html/repuestos"
BACKEND_ROOT="${PROJECT_ROOT}/backend"

DB_HOST="${DB_HOST:-db}"
DB_PORT="${DB_PORT:-3306}"
DB_NAME="${DB_NAME:-lnrepuestos}"
DB_USER="${DB_USER:-lnrepuestos}"
DB_PASSWORD="${DB_PASSWORD:-lnrepuestos}"
COOKIE_VALIDATION_KEY="${COOKIE_VALIDATION_KEY:-dev-cookie-validation-key-please-change}"

cd "${BACKEND_ROOT}"

# Write secrets.php from env every startup — file is a placeholder in the repo.
cat > config/secrets.php <<PHP
<?php
return [
    'cookie_validation' => '${COOKIE_VALIDATION_KEY}',
    'database_user'     => '${DB_USER}',
    'database_password' => '${DB_PASSWORD}',
    'database_name'     => '${DB_NAME}',
];
PHP

# Overwrite db.php so the Yii app talks to the docker-networked MySQL host.
cat > config/db.php <<PHP
<?php
\$secrets = require(__DIR__ . '/secrets.php');
return [
    'class' => 'yii\\db\\Connection',
    'dsn' => 'mysql:host=${DB_HOST};port=${DB_PORT};dbname='.\$secrets['database_name'],
    'username' => \$secrets['database_user'],
    'password' => \$secrets['database_password'],
    'charset' => 'utf8',
];
PHP

if [ ! -f vendor/autoload.php ]; then
    echo "[entrypoint] installing composer dependencies..."
    composer install --no-interaction --prefer-dist --no-progress
fi

mkdir -p runtime web/assets
chown -R www-data:www-data runtime web/assets || true
chmod -R 0777 runtime web/assets || true

echo "[entrypoint] waiting for MySQL at ${DB_HOST}:${DB_PORT}..."
until php -r "new PDO('mysql:host=${DB_HOST};port=${DB_PORT}', '${DB_USER}', '${DB_PASSWORD}');" 2>/dev/null; do
    sleep 2
done
echo "[entrypoint] MySQL is up."

echo "[entrypoint] running migrations..."
php yii migrate --interactive=0 || echo "[entrypoint] migrations failed or nothing to apply — continuing."

exec "$@"
