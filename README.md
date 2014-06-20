# Laravel 4 Starter
Just a simple starter for project using Laravel

# What's inside?
* Authentication and authorization: `catalyst/sentry`
* Form builer: `anahkiasen/former`
* Frontend layout: Twitter Bootstrap 3
* Admin layout: `almasaeed2010/AdminLTE`

# Install
* Clone this repo
* `composer update --no-scripts`
* `php artisan starter:install`

# Default values
* Groups: Admin, User
* Default admin account: `admin@localhost | n0password`

# `User` model
* For flexibility, open `app/config/packages/cartalyst/sentry/config.php` and
change `users.model` to `User`. This is a class extended from 
`\Cartalyst\Sentry\Users\Eloquent\User`.
