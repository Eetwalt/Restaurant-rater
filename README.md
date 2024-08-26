# Restaurant Rater

Restaurant Rater is a purpose-built web application for discovering and rating restaurants. Built with the TALL stack (Tailwind CSS, Alpine.js, Laravel, and Livewire), it provides a modern and interactive experience for users to share and explore restaurant ratings.

## Features

-   User authentication and profile management
-   Add and browse restaurants
-   Rate restaurants based on food quality, value, and ambiance
-   View detailed restaurant information and ratings
-   Responsive design for seamless use on desktop and mobile devices

## Tech Stack

-   **Laravel**: A powerful PHP framework for building web applications
-   **Livewire**: A full-stack framework for dynamic, reactive interfaces
-   **Alpine.js**: A lightweight JavaScript framework for adding interactivity
-   **Tailwind CSS**: A utility-first CSS framework for rapid UI development
-   **MySQL**: Database for storing application data

## Getting Started

1. Clone the repository
2. Install dependencies:
    ```
    composer install
    npm install
    ```
3. Set up your environment variables in `.env`
4. Generate application key:
    ```
    php artisan key:generate
    ```
5. Run database migrations:
    ```
    php artisan migrate
    ```
6. Seed the database with initial data:
    ```
    php artisan db:seed
    ```
7. Compile assets:
    ```
    npm run dev
    ```
8. Start the development server or use Laravel Herd:
    ```
    php artisan serve
    ```

Visit `http://localhost:8000` in your browser to see the application.
