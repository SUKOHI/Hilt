# Hilt
A Laravel package to add @error directive of Blade.

# Installation

Execute the following composer command.

    composer require sukohi/hilt:1.*

Set the ServiceProvider in `config/app.php`

    'providers' => [
        ...Others...,  
        Sukohi\Hilt\HiltServiceProvider::class,
    ]

# Preparation

To publish the view, execute the following commands.

    php artisan vendor:publish

* You can change the view located at `resources/views/vendor/hilt/error.blade.php`.

Then set Blade directive of Hilt in `app/Providers/AppServiceProvider.php` like so.

    public function boot()
    {
        \Sukohi\Hilt\Hilt::directive();
    }

Now you can use `@error()` in your views.

# Usage

(in View)

    @error('INPUT-KEY') <= An error will be displayed here.

    // e.g. 
    
    @error('email')
    @error('password')
    @error('name')

# License

This package is licensed under the MIT License.  
Copyright 2016 Sukohi Kuhoh