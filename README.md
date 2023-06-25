# **Laravel Training Repo**
Personal repository for learning Laravel framework.

---

<br>

# SETUP
+ INSTALLATION. Make sure to have [Composer](https://getcomposer.org/download/), [Xampp](https://www.apachefriends.org/), [Nodejs](https://nodejs.org/en) and a file editor *(I use [VSCode](https://code.visualstudio.com/download))* installed.

+ To check if **Composer** is installed correctly, entering the following to the terminal should list all the available commands and the composer version. **Composer** is a dependency manager for php.
    ```bash
    composer
    ```
    If nodejs is installed, the following commands should give a version number:
    ```bash
    node -v
    npm -v
    ```

+ Open a folder in VSCode. To install laravel globally, enter the following the terminal: <br>
    ```bash
    composer global require laravel/installer
    ```
+ To create a new project[^1], 
    ```bash
    laravel new your-app-name
    ```
     or
    ```
    composer create-project laravel/laravel my_first_app
    ```
    where the last three mean: `organizationName/projectName folderName` [^2]
    
+ To start the app, change directory to your app folder then run
    ```bash
    cd your-app-name
    php artisan serve
    ```
    To see the list of all artisan commands,
    ```bash
    php artisan
    ```
+ To scaffold basic login and registration views and routes
    ```bash
    composer require laravel/ui --dev
    php artisan ui:auth
    ```

+ Install other dependencies by
    ```bash
    npm install
    ```
+ To connect your mysql database, edit the `.env` file accordingly. change the DB_DATABASE to the name of your database, and set DB_USERNAME and DB_PASSWORD as well.

+ To make sure your databse have the necessary tables for laravel, run the command `php artisan migrate`. Your database should now have the tables failed_jobs, migrations, password_resets, personal_access_tokens, and **users**.


<br><br>

# NOTES

+ views should be primarily composed of html markup. Avoid computations or databse fetches - should be reserved for controllers.

+ ***MVC*** - Model View Controller.
    - **Model** -  Data 
    - **View** - (frontend) What end-users see in HTML. powered by blade templates that combine php and html.
    - **Controller** -  Router and Controllers is how the users interact with the model. PHP class containing a variety of methods like *show*, *update*, *edit*, and *destroy*. 

+ Inside `resources/routes/web.php`, controls and determines what happens for different url patterns.

+ Make sure to include `@csrf` in form submissions. This token is used to verify that the authenticated user is the person actually making the requests to the application.

+ Make sure to organize your code. Controller files should exclusively hold all functions. `app/Http/Controllers` holds all the controllers. To create a new controller file through the terminal type in `php artisan make:controller ControllerName`.

+ I am following [this Youtube Video](https://www.youtube.com/watch?v=cDEVWbz2PpQ&t=631s).




---------

[^1]: `composer create-project laravel/laravel my_first_app`: This command uses Composer, a dependency management tool for PHP, to create a new Laravel project. It downloads the Laravel framework files and installs all the necessary dependencies defined in the composer.json file. It also allows you to specify the version of Laravel you want to install. For example, you can run `composer create-project laravel/laravel my_first_app --prefer-dist "8.*` to create a Laravel 8 application. This command gives you more control over the installation process and allows you to customize the project setup. 

[^2]: `laravel new my_first_app`: This command is a shorthand provided by the Laravel installer, a globally installed Composer package. It simplifies the process of creating a new Laravel application by automatically downloading the latest version of Laravel and setting up a basic project structure. It is a convenient way to quickly create a new Laravel project without having to run the composer create-project command explicitly.