# **Laravel Training Repo**
Personal repository for learning Laravel framework.

---

<br>

# SETUP
+ INSTALLATION. Make sure to have [Composer](https://getcomposer.org/download/), [Xampp](https://www.apachefriends.org/), [Nodejs](https://nodejs.org/en) and [VSCode](https://code.visualstudio.com/download) installed.

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
+ To create a new project, 
    ```bash
    laravel new your-app-name
    ```
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
+ 

<br><br>

# NOTES

+ views should be primarily composed of html markup. Avoid computations or databse fetches - should be reserved for controllers.

+ ***MVC*** - Model View Controller.
    - **Model** -  Data 
    - **View** - (frontend) What end-users see in HTML. powered bt blade templates that combine php and html.
    - **Controller** -  Router and Controllers is how the users interact with the model. PHP class containing a variety of methods like *show*, *update*, *edit*, and *destroy*. 