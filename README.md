# Bakuna Tracker – Purok Dimatulac

Laravel 12, Blade, Tailwind CSS v3, Vite, SQLite.

## Setup
1. `composer install`
2. `npm install`
3. Copy `.env.example` to `.env` (`cp .env.example .env` in Git Bash)
4. `php artisan key:generate`
5. Create an empty `database/database.sqlite` file if needed
6. `php artisan migrate:fresh --seed`
7. In two terminals: `php artisan serve` and `npm run dev`
8. Open http://127.0.0.1:8000/login

Seeded login: `nurse.dimatulac@bakuna.test` / `bakuna2026`

Build for submission: `npm run build`.

This source archive excludes generated `vendor/`, `node_modules/`, and private `.env` files. Install dependencies locally before running.

The six vaccination records are fictional demo data. One schedule is dated August 7, 2026.
