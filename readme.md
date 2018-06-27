
# Laravel BoilerPlate Template

A laravel Boilerplate template with user management , role management, Admin LTE theme and many JS and PHP packages installed

# Features & Implemented Module

    1. Authentication with user disabed/enabled implementation
    2. User management
    3. Role management
    4. Laravel Permission([spatie-permission](https://github.com/spatie/laravel-permission))
    5. AJAX Loading and page Loading indication
    6. Theme Admin (AdminLTE)
    7. Widgets/alert/modal/table/box Implemented as reusable using  Laravel components & slot

You can use Theme's widgets/alert/modal/table/box using laravel's components slot in blade template

            //example widget
            @component('components.widget')
               @slot('title') Your title @endslot
               @slot('description')
                   your description
               @endslot
               @slot('body')
                your body
               @endslot
           @endcomponent
           
Alert component added to the blade directives for easy of use.

            //so you can use alert in any blade like this;
            @alert(['type' => 'success'])
               {{$message}}
            @endalert
            
            //alert type=> success,info,danger,warning; default => info


# Packages Included

        #PHP Packages
            1. Laravel Permission (Spatie)
            2. PHP debugbar (https://github.com/barryvdh/laravel-debugbar)
            3. Carbon

        #Other JS and css Packages
            1. Bootstrap
            2. Bootstrap slider|colorpiker|datepicker|datepicker-range|slider|timepicker|wysihtml5
            3. Chart.js
            4. CKeditor
            5. Datatables
            6. fastclick
            7. Flot
            8. Font-awesome
            7. Full calender
            8. InputMask
            7. Jquery
            8. Jquery knob|slimscroll|sparkline|Jqueryui
            9. mocha
            10. jvectormap
            11. moment js
            12. Packages
            13. Raphael
            14. Select 2
            15. Hotsnackbar (https://github.com/nakulrathore/HotSnackbar)
            16. ICheck

# Note
    1. All packages is not added in the webpack.mix.js for compile; only important packages are added.
    2. You have to add the package you need from "resources/assets/theme-asset" folder in the webpack.mix.js file.
    3. customise css and related js from resources/assets/

## Run
Copy .env.example to .env and setup your Database information.

``` bash
# install dependencies
npm install

# Composer install
composer install

# Laravel init
php artisan key:generate
php artisan migrate
php artisan db:seed

# serve at localhost:8000
php artisan serve

# serve with hot reload at localhost:3000
npm run watch

```

 Use DB seed for seeding Role and Permission for Role Management and User Management access.
# Login (if you use DB seed)
    user admin@sangit.info
    pass: secret

  # Screenshot
![alt text](https://github.com/sangit0/Laravel-boilerplate-Template/blob/master/screenshots/login.png "Screenshot")
![alt text](https://github.com/sangit0/Laravel-boilerplate-Template/blob/master/screenshots/user-profile.png "Screenshot")
![alt text](https://github.com/sangit0/Laravel-boilerplate-Template/blob/master/screenshots/user-manager.png "Screenshot")
![alt text](https://github.com/sangit0/Laravel-boilerplate-Template/blob/master/screenshots/roles.png "Screenshot")
![alt text](https://github.com/sangit0/Laravel-boilerplate-Template/blob/master/screenshots/edit-user.png "Screenshot")
![alt text](https://github.com/sangit0/Laravel-boilerplate-Template/blob/master/screenshots/edit-role.png "Screenshot")
![alt text](https://github.com/sangit0/Laravel-boilerplate-Template/blob/master/screenshots/php-debugbar.png "Screenshot")
