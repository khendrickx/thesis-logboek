#Installation
## Add an .env.php file to your project's root directory
 Use .env.php.example as example
 
## Update the app/config/database.php file to you needs
## Update the app/config/app.php file to you needs
## Get the project's Composer dependencies
    composer install
    
## Create database
 Create your MySQL database, as usual
 
## Run Artisan migration
    php artisan migrate
 
## Seed database
    php artisan db:seed
