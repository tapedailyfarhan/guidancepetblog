<p align="center"><img src="http://dev.guidance.pet/assets/images/logo-text.png"></p>

[![Build Status](https://img.shields.io/travis/gothinkster/laravel-realworld-example-app/master.svg)](https://travis-ci.org/gothinkster/laravel-realworld-example-app) [![Gitter](https://img.shields.io/gitter/room/realworld-dev/laravel.svg)](https://gitter.im/realworld-dev/laravel) [![GitHub stars](https://img.shields.io/github/stars/gothinkster/laravel-realworld-example-app.svg)](https://github.com/gothinkster/laravel-realworld-example-app/stargazers) [![GitHub license](https://img.shields.io/github/license/gothinkster/laravel-realworld-example-app.svg)](https://raw.githubusercontent.com/gothinkster/laravel-realworld-example-app/master/LICENSE)

> ### Pet Guidance - Blog | http://dev.guidance.pet | http://guidance.pet

This repo is functionality In-Progress — PRs and issues welcome!

----------

# Getting started

## Installation

Clone the repository

    git@github.com:tapedailyfarhan/guidancepetblog.git

Switch to the repo folder

    cd guidancepetblog

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

Run the database seeder

    php artisan db:seed
    
Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000

**TL;DR command list**

    git@github.com:tapedailyfarhan/guidancepetblog.git
    cd guidancepetblog
    composer install
    cp .env.example .env
    php artisan key:generate
    
**Make sure you set the correct database connection information before running the migrations** [Environment variables](#environment-variables)

    php artisan migrate
    php artisan db:seed
    php artisan serve

