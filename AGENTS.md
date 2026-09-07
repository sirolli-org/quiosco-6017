# Agents

## About this project
YAQ ("Yet Another Quiosco") is a Laravel 13 (PHP 8.3) web app for managing a small store: products, sales, customers, and reports. Frontend assets via Vite + Tailwind CSS 4.

## How to build
```bash
composer install && npm install
cp .env.example .env && php artisan key:generate
php artisan migrate
composer run dev   # local dev server
npm run build       # production assets
```

## Key notes
- Tests: `composer run test`
- See `BUILD.md` for full setup/deploy (incl. Podman containers).
