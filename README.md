# Laravel Simple Authentication App

This is a basic Laravel application demonstrating fundamental user registration and login functionality. It provides a simple starting point for building web applications that require user authentication.

## Features

* User Registration (Name, Email, Password)
* User Login
* Password Hashing for Security
* Session-based Authentication
* Basic Dashboard for Authenticated Users
* Logout Functionality
* Basic Form Validation and Error Display

## Requirements

* PHP >= 8.1
* Composer
* A database (MySQL, PostgreSQL, SQLite, etc.)
* Laravel 10 or 11 (This code is based on recent Laravel versions)

## Installation

1.  **Clone the repository:**
    ```bash
    git clone [https://github.com/TheVictorDevX/LaravelAuthenticationApp.git](https://github.com/TheVictorDevX/LaravelAuthenticationApp.git)
    cd LaravelAuthenticationApp
    ```
2.  **Install Composer dependencies:**
    ```bash
    composer install
    ```
3.  **Copy the environment file:**
    ```bash
    cp .env.example .env
    ```
4.  **Generate an application key:**
    ```bash
    php artisan key:generate
    ```
5.  **Configure your database:**
    Open the `.env` file and update the database connection details (`DB_CONNECTION`, `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`).
6.  **Run database migrations:**
    This will create the necessary tables, including the `users` table.
    ```bash
    php artisan migrate
    ```

## Running the Application

1.  **Start the Laravel development server:**
    ```bash
    php artisan serve
    ```
2.  Open your web browser and visit the URL displayed in your terminal (usually `http://127.0.0.1:8000`).
3.  You should be redirected to the login page.
4.  You can access the registration page directly at `/register`.

## Usage

* **Register:** Navigate to the `/register` page to create a new user account.
* **Login:** After registering, or if you already have an account, navigate to the `/login` page to log in.
* **Dashboard:** Upon successful login, you will be redirected to the `/dashboard` page (requires authentication).
* **Logout:** Click the "Logout" button on the dashboard to end your session.

## Code Structure

* **Routes:** `routes/web.php` defines the URLs and maps them to controller actions.
* **Controller:** `app/Http/Controllers/AuthController.php` handles the logic for registration, login, and logout.
* **Views:**
    * `resources/views/auth/register.blade.php` (Registration form)
    * `resources/views/auth/login.blade.php` (Login form)
    * `resources/views/dashboard.blade.php` (Simple dashboard page)
* **Model:** `app/Models/User.php` (Eloquent model for the users table)

## Contributing

Feel free to fork this repository and make improvements.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
