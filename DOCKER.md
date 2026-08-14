# Docker setup

Local dev stack for this Yii2 + Vue 2 project.

## Run it

```bash
docker compose up --build
```

First boot: composer + npm install run, migrations apply, frontend bundle builds. The `frontend` container exits after `npm run build` — that's expected.

## URLs

| What            | URL                                                        |
| --------------- | ---------------------------------------------------------- |
| Frontend (SPA)  | http://localhost/repuestos/                                |
| Backend API     | http://localhost/repuestos/backend/web/index.php/api/      |
| MySQL           | `localhost:13306` — user `lnrepuestos` / pass `lnrepuestos` / db `lnrepuestos` (root pw `root`) |

## Common commands

```bash
docker compose up -d              # start in background
docker compose down               # stop
docker compose logs -f web        # tail apache/php logs
docker compose exec web bash      # shell in the backend container

# rebuild the frontend bundle after editing src/
docker compose run --rm frontend npm run build

# frontend with hot reload (webpack-dev-server) — visit http://localhost:8080
docker compose run --rm -p 8080:8080 frontend npm run dev

# run a Yii console command / new migration
docker compose exec web php backend/yii migrate
```

## Notes

- `web` binds host port `80` because `src/main.js` hardcodes `http://localhost/repuestos/…` — using 80 lets it work unchanged.
- MySQL is on `13306` on the host to avoid clashing with other MySQL containers you may have running.
- The entrypoint rewrites `backend/config/secrets.php` and `backend/config/db.php` from env on each start — do not commit changes to those files while using Docker.
