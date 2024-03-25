# Laravel Eloquent Example

This project demonstrates the use of Laravel Eloquent ORM for handling complex database operations in an elegant and efficient manner. It includes examples of migrations, seeders, and routes to manage users, posts, and comments in a simple blog-like API.

## Getting Started

These instructions will get your copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

Before you begin, ensure you have the following installed on your local environment:
- PHP >= 8.2
- Composer
- Laravel
- A supported database (MySQL, PostgreSQL, SQLite, SQL Server)

### Installation

1. **Clone the Repository**

    ```bash
    git clone https://github.com/MrKacmaz/EloquentModels.git
    ```

2. **Install Dependencies**

    Navigate to the project directory and install dependencies:

    ```bash
    cd EloquentModels
    composer install
    ```

3. **Environment Configuration**

    Copy the `.env.example` file to create a `.env` file and configure your database connection settings:

    ```bash
    cp .env.example .env
    ```

4. **Generate Application Key**

    Generate a new Laravel application key:

    ```bash
    php artisan key:generate
    ```

5. **Run Migrations**

    Create the database tables:

    ```bash
    php artisan migrate
    ```

6. **Seed the Database**

    Populate the database with sample data:

    ```bash
    php artisan db:seed --class=UserSeeder
    php artisan db:seed --class=PostSeeder
    php artisan db:seed --class=CommentSeeder
    ```
    Seeders are just using ```public/{name}.json``` files as 

### Testing the Routes

Once the application is set up, you can test the following routes:

- `/users` - Retrieve all users.
- `/posts` - Retrieve all posts.
- `/comments` - Retrieve all comments.
- `/posts/{post_id}/comments` - Retrieve all comments associated with a specific post.

## Contributing

Contributions are what make the open-source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## Acknowledgments

- Laravel Documentation
- PHP Documentation

