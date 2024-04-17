# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://img.shields.io/packagist/dt/laravel/lumen-framework)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://img.shields.io/packagist/v/laravel/lumen-framework)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://img.shields.io/packagist/l/laravel/lumen)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

> **Note:** In the years since releasing Lumen, PHP has made a variety of wonderful performance improvements. For this reason, along with the availability of [Laravel Octane](https://laravel.com/docs/octane), we no longer recommend that you begin new projects with Lumen. Instead, we recommend always beginning new projects with [Laravel](https://laravel.com).

## Official Documentation

Documentation for the framework can be found on the [Lumen website](https://lumen.laravel.com/docs).

## Contributing

Thank you for considering contributing to Lumen! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Lumen, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
#   l u m e n _ b l o g _ a p i 

## Lumen_blog_api Project Backend
This backend project was developed using the Lumen PHP framework.

## Facility
Clone this repository to your local machine.
Navigate to the project folder (lumen_blog_api\).
Run composer install to install the Lumen dependencies.
Next, configure the environment variables according to your development environment.
Configure the connection to the database in the .env file.
Run the database migrations with the php artisan migrate command.
Start the development server by running php -S localhost:8000 -t public.

### Setting
The .env file contains the main configuration of the application, including the connection to the database.

## Use
The API provides endpoints to perform CRUD operations on blogs. See the API documentation for available endpoints.

## Project Structure
The backend project follows the conventional Lumen structure, with directories for controllers, models, routes, etc.

## Used technology
Lumen (PHP Framework)
Postgres(Database)

## Development Server
To start the development server, run the command php -S localhost:8000 -t public from the project root. This will start the server at http://localhost:8000/.

## Database Migrations
This project uses database migrations to manage the database structure. You can run the migrations with the php artisan migrate command.

## Seeders
To fill the databases with initial values, we have the seeders, with the command php artisan make:seeder StudentSeeder and we execute it with the command php artisan db:seed --class=NombreDelSeeder

## Additional Help
For more help on Lumen, you can run the php artisan help command or visit the official Lumen documentation.

## Standards and Conventions
Code Style
Use single quotes for text strings.
Use camelCase for variable and function names.
Use access modifiers (public, private, protected) for class members.

## Naming Conventions
Use descriptive names for variables, functions and classes.
Class names should be based on their purpose.