# Restaurant and Food Ordering Platform

## Description:

This is a robust platform for restaurants to manage orders, menus, and customers. Users can browse restaurants, order food, and track their orders in real-time. The platform is built using Laravel.

## Features:

## Technologies Used:

-   Laravel
-   PHP
-   MySQL
-   Blade Template engine
-   Node.js
-   Pusher (for real-time communication)

## Installation:

1. Clone this repository to your local machine.
   `git clone git@github.com:nilufarshaikh/food-ordering-system.git`

2. Navigate to the project directory.
   `cd food-ordering-system`

3. Install composer dependencies.
   `composer install`

4. Create a copy of the `.env.example` file and rename it to `.env`.
   `cp .env.example .env`

5. Generate the application key.
   `php artisan key:generate`

6. Set up your pusher, mailer and database configuration in the `.env` file.

7. Run database migrations.
   `php artisan migrate`

8. Install Node.js dependencies.
   `npm install`

9. Build and run the NPM server.
   `npm run build`
   `npm run dev`

10. Serve the Laravel application.
    `php artisan serve`

11. Open your web browser and navigate to http://localhost:8000 to view the app.

## Usage:

## Resources:

[Official Laravel Documentation](https://laravel.com/docs/)
