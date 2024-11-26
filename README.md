# Task List App

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About the Task List App

This is a simple yet powerful task management app built using the Laravel framework. It allows users to easily create, update, and delete tasks, organize them with categories, and keep track of their progress. Perfect for organizing personal projects, work tasks, or daily activities.

### Key Features:

-   Add, edit, and delete tasks.
-   Mark tasks as completed or pending.
-   Responsive design for mobile and desktop usage.

## Installation

To get started with this Task List app, follow the instructions below:

### Prerequisites

-   PHP >= 8.0
-   Composer
-   MySQL or SQLite (database configuration depends on your choice)
-   Laravel >= 10.x

### Steps

1. Clone the repository:

    ```bash
    git clone https://github.com/yourusername/task-list-app.git
    ```

2. Navigate into the project directory:

    ```bash
    cd task-list-app
    ```

3. Install the required dependencies via Composer:

    ```bash
    composer install
    ```

4. Copy the `.env.example` file to create your own `.env` file:

    ```bash
    cp .env.example .env
    ```

5. Generate the application key:

    ```bash
    php artisan key:generate
    ```

6. Set up your database. Update the `.env` file with your database credentials:

    ```ini
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=task_list
    DB_USERNAME=root
    DB_PASSWORD=
    ```

7. Run database migrations to create the required tables:

    ```bash
    php artisan migrate
    ```

8. Optionally, seed the database with some example data:

    ```bash
    php artisan db:seed
    ```

9. Serve the application locally:

    ```bash
    php artisan serve
    ```

    The app will be accessible at `http://localhost:8000`.

## Usage

-   **Authentication**: Sign up and log in to your account to manage tasks.
-   **Creating Tasks**: Once logged in, you can create tasks with descriptions, deadlines, and categories.
-   **Task Status**: Mark tasks as "completed" or "pending" by clicking on them.
-   **Categories**: Organize your tasks into categories to easily find and track related tasks.
-   **Filtering**: Filter tasks by their completion status (Completed/Pending).

## Screenshots

Add some screenshots here to show the UI of the app.

## Contributing

If you'd like to contribute to this project, feel free to fork the repository and submit pull requests. You can report bugs or suggest new features via the Issues tab on GitHub.

Please ensure that any contributions adhere to the project's coding standards and include tests where necessary.

## Code of Conduct

We follow a [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct) to ensure that this project remains welcoming and inclusive for everyone.

## Security Vulnerabilities

If you discover a security vulnerability, please send an email to the project owner or [Taylor Otwell](mailto:taylor@laravel.com) directly. All vulnerabilities will be addressed promptly.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
