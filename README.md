# blog-laravel11

A simple and powerful blog application built with Laravel 11, featuring user authentication, CRUD operations for blog posts, responsive design, rich text editing, and image uploads.

Welcome to the Blog Laravel 11 project! This repository contains a simple blog application built with Laravel 11. The application allows users to create, edit, and delete blog posts, as well as view a list of all posts.

## Table of Contents

- [Features](#features)
- [Prerequisites](#prerequisites)
- [Installation](#installation)
- [Usage](#usage)
- [Running Tests](#running-tests)
- [Contributing](#contributing)
- [License](#license)
- [Acknowledgments](#acknowledgments)

## Features

- User authentication and authorization
- Create, read, update, and delete (CRUD) operations for blog posts
- Responsive design with Bootstrap
- Pagination for blog posts
- Rich text editor for creating posts
- Image upload functionality

## Prerequisites

Before you begin, ensure you have met the following requirements:

- PHP >= 8.0
- Composer
- MySQL or another supported database
- Node.js and npm

## Installation

Follow these steps to set up the project locally:

1. **Clone the repository:**

    ```bash
    git clone https://github.com/your-username/blog-laravel11.git
    cd blog-laravel11
    ```

2. **Install dependencies:**

    ```bash
    composer install
    npm install
    ```

3. **Set up the environment variables:**

    Copy the `.env.example` file to `.env` and update the database credentials and other necessary configuration.

    ```bash
    cp .env.example .env
    ```

4. **Generate application key:**

    ```bash
    php artisan key:generate
    ```

5. **Run migrations and seed the database:**

    ```bash
    php artisan migrate --seed
    ```

6. **Build front-end assets:**

    ```bash
    npm run dev
    ```

7. **Start the development server:**

    ```bash
    php artisan serve
    ```

    The application will be available at `http://localhost:8000`.

## Usage

Once the server is running, you can register a new user or log in with an existing account. You will be able to create, edit, and delete blog posts. The home page displays a list of all blog posts with pagination.

## Running Tests

To run the tests, use the following command:

```bash
php artisan test

## Contributing

Contributions are welcome! Please follow these steps to contribute:

1. **Fork the repository**
2. Create a new branch (`git checkout -b feature-branch`)
3. Make your changes
4. Commit your changes (`git commit -m 'Add some feature'`)
5. Push to the branch (`git push origin feature-branch`)
6. Open a pull request

Please make sure to update tests as appropriate.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for more information.

## Acknowledgments

- [Laravel](https://laravel.com/)
- [Bootstrap](https://getbootstrap.com/)
- [TinyMCE](https://www.tiny.cloud/)
- [FontAwesome](https://fontawesome.com/)
- All contributors and supporters of this project
