
# Getting started

## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/8.0/installation#installation)

Clone the repository

    git clone https://github.com/ulyazen/arsip.git

Switch to the repo folder

    cd arsip

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate

Generate a new JWT authentication secret key

    php artisan migrate

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan seed

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000

Credentials

    **Admin:** admin@admin.com
    **Password:** secret

    **User:** user@user.com
    **Password:** secret
