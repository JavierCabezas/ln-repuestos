<?php
$secrets = require(__DIR__ . '/secrets.php');

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=127.0.0.1;dbname='.$secrets['database_name'],
    'username' => $secrets['database_user'],
    'password' => $secrets['database_password'],
    'charset' => 'utf8',
];