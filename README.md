# Laravel User Authentication System

![Laravel Logo](https://laravel.com/assets/img/components/logo-laravel.svg)

Welcome to the Laravel User Authentication System! This project provides a robust and secure user authentication system built with Laravel, allowing users to register, log in, and access a personalized dashboard.

## Features

- **User Registration**: Seamlessly register new accounts with name, email, and password.
- **User Login**: Log in securely using email and password credentials.
- **Dashboard Access**: Access a personalized dashboard upon successful authentication.
- **Built-in Validation**: Form validation ensures data integrity and security.
- **MySQL Integration**: Seamlessly integrates with MySQL database for data persistence.

## Getting Started

To get started with the Laravel User Authentication System, follow these simple steps:

1. **Clone the Repository**: Clone this repository to your local machine using the following command:

   ```bash
   git clone https://github.com/your-username/laravel-user-authentication.git
   ```

2. **Navigate to Project Directory**: Move into the cloned project directory:

   ```bash
   cd laravel-user-authentication
   ```

3. **Install Dependencies**: Install PHP dependencies using Composer:

   ```bash
   composer install
   ```

4. **Configure Environment**: Copy the `.env.example` file to `.env` and update it with your database connection details:

   ```bash
   cp .env.example .env
   ```

5. **Generate Application Key**: Generate a unique application key:

   ```bash
   php artisan key:generate
   ```

6. **Run Migrations**: Run database migrations to create necessary tables:

   ```bash
   php artisan migrate
   ```

7. **Serve Application**: Start the Laravel development server:

   ```bash
   php artisan serve
   ```

8. **Access Application**: Access the application in your web browser at `http://localhost:8000`.

## Usage

- **Registration**: Visit the registration page (`/register`) to create a new account.
- **Login**: Log in using your email and password at the login page (`/login`).
- **Dashboard**: Access your personalized dashboard (`/dashboard`) upon successful login.
- **Logout**: Logout by clicking the "Logout" button.

## Contributing

Contributions are welcome! If you have any suggestions, bug fixes, or improvements, please feel free to fork this repository, make changes, and submit a pull request.

