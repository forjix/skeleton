# Forjix Skeleton

The official application skeleton for the Forjix framework.

## Requirements

- PHP 8.2+
- Composer

## Installation

```bash
composer create-project forjix/skeleton my-app
cd my-app
```

## Directory Structure

```
├── app/
│   ├── Controllers/    # HTTP controllers
│   └── Models/         # Eloquent-style models
├── config/             # Configuration files
├── database/           # Migrations and seeders
├── public/             # Web server document root
├── resources/
│   ├── css/           # Stylesheets
│   ├── js/            # JavaScript files
│   └── views/         # Blade templates
├── routes/            # Route definitions
└── storage/           # Cache and compiled views
```

## Development Server

```bash
php forjix serve
```

Visit `http://localhost:8000` in your browser.

## Available Commands

```bash
php forjix serve              # Start development server
php forjix make:controller    # Create a new controller
php forjix make:model         # Create a new model
php forjix make:migration     # Create a new migration
php forjix make:middleware    # Create a new middleware
php forjix migrate            # Run migrations
php forjix migrate:rollback   # Rollback migrations
php forjix routes:list        # List all routes
php forjix cache:clear        # Clear application cache
```

## Configuration

Copy `.env.example` to `.env` and configure your environment:

```bash
cp .env.example .env
```

## License

MIT
