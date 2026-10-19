# TaskFlow

TaskFlow is a Laravel modular monolith for learning how to build a multi-tenant project-management SaaS and preparing for Middle PHP/Laravel interviews.

## Stack

- PHP 8.4 and Laravel 13
- Blade, Bootstrap 5, and Vite
- MySQL 8
- Docker Compose
- PHPUnit

## Start locally

From this directory:

```powershell
docker compose up -d --build
docker compose exec app php artisan migrate
```

Open [http://localhost:8010](http://localhost:8010). The MySQL service is available to host tools on port `3307`; the application connects to it through Docker on port `3306`.

The committed `.env.example` contains local-development credentials only. Copy it to `.env` if needed and generate an application key with `docker compose exec app php artisan key:generate`.

## Useful commands

```powershell
docker compose exec app php artisan test
docker compose exec app ./vendor/bin/pint --test
docker compose exec frontend npm run build
docker compose logs -f app mysql frontend
docker compose down
```

MySQL data persists in the `taskflow_mysql_data` Docker volume. `docker compose down` keeps the volume; `docker compose down -v` removes it.

## Learning roadmap

Build in small, reviewable milestones:

1. Workspace creation and user membership with owner, admin, and member roles.
2. Projects and tasks with status, priority, deadlines, and assignees.
3. Policies and tenant-scoped queries that prevent cross-workspace access.
4. Comments, activity history, and dashboard summaries.
5. Feature tests, database constraints, queues/cache, and deployment basics.

Keep the application as a modular monolith. For each milestone, define the business rules, add migrations and tests, then implement the UI and authorization. Realtime features and billing are intentionally out of the first release.
