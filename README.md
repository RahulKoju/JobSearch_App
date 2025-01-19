# JobSearch_App

A web application built with Laravel for job seekers to find opportunities and manage applications.

## Features

-   **CRUD Operations**: Create, Read, Update, and Delete job listings.
-   **User Authentication**: Secure login and registration system.
-   **Job Application**: Apply for jobs directly through the platform.
-   **Admin Panel**: Manage job listings and applications.
-   **Unit Testing**: Includes unit tests for model relationships.

## Technologies Used

-   **Backend**: Laravel (Artisan commands, controllers, policies, models, Eloquent ORM)
-   **Frontend**: Blade Templates, Tailwind CSS
-   **Database**: MySQL
-   **Development Tools**: Laravel Factories, Migrations, and Unit Testing

## Installation

1. Clone the repository:

    ```bash
    git clone https://github.com/RahulKoju/JobSearch_App.git
    ```

2. Navigate to the project folder:

    ```bash
    cd JobSearch_App
    ```

3. Install dependencies:

    ```bash
    composer install
    ```

4. Set up the environment file:

    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

5. Migrate the database:

    ```bash
    php artisan migrate
    ```

6. Serve the application:
    ```bash
    php artisan serve
    ```

## Contributing

Feel free to open issues and pull requests. Contributions are welcome!
