# Setup Laravel 5 through PHPStorm via Composer for WampServer 3

This is a small guide for people to help get them started with Laravel 5 on Windows using PHPStorm 2016 and WampServer 3. I am creating this because it was a little frustrating for me as a Laravel newbie to get started in my local environment, and I had to go through several sources to get things running smoothly. So after almost breaking my keyboard with my forehead and figuring everything out, here is how I did it.

In this guide you will have already installed:

## Composer (via the Windows installer)
 - https://getcomposer.org/download/
Wampserver 3 (I installed the 64 bit because my OS is 64 bit) - http://www.wampserver.com/en/
PHPStorm - https://www.jetbrains.com/phpstorm/

## Step 1: Configure Composer in PHPStorm

Go to Settings -> Languages & Frameworks -> PHP -> Composer
Set the PHP executable path to C:\wamp\bin\php\php5.6.19\php.exe
Set the composer.phar path to C:\ProgramData\ComposerSetup\bin\composer.phar

## Step 2: Create new Laravel project in PHPStorm (via Composer)

Go to File -> New Project
Select Composer Project on the left-hand side
Enter the Location you want Laravel to be installed in i.e. C:\wamp\www\my-awesome-project
Select Use existing composer.phar and ensure the path is there
Search for laravel/laravel in Filter packages and select it, you can leave the version as <default>
Ensure the path to the PHP executable is also set below (scroll down if you don't see it)
Click Create
Add /.idea to your .gitignore file

## Step 3: Add the IDE helper dependency

Go to Tools -> Composer -> Add dependency...
Search for barryvdh/laravel-ide-helper
Click on the newest NON--dev version and Install
Add line to providers array in config/app.php - Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class,
Go to Tools -> Run Command... then enter php artisan ide-helper:generate in the command prompt

## Step 4: Add vhost to WampServer

Make sure WampServer is running and navigate to http://localhost in your browser
Click Add a Virtual Host under Tools
Enter a name for the vhost like myawesomeproject
Enter path to public folder for vhost like c:/wamp/www/my-awesome-project/public
Right click the WampServer icon in the taskbar, go to Tools -> Restart DNS
You should now be able to visit http://myawesomeproject in your browser and it will display your Laravel project. Now all that's left to do is configure your environments and write your app.
