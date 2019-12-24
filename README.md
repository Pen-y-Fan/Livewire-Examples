# Livewire Examples

This project is created from the examples from on the [Livewire website](https://laravel-livewire.com/).

## Installation

This is a Laravel project with Livewire installed. The installation is similar to a new Laravel project.

### Clone or Download this Project from GitHub

See [Cloning a repository](https://help.github.com/en/articles/cloning-a-repository) for details on how to create a 
local copy of this project on your computer.

### Install the Dependencies

The project uses Laravel 6.5, which has a requirement for **PHP 7.2** or higher. 
 Composer is highly recommended to install the dependencies.

From the root of the project run composer install from the command line:

```shell script
composer install
```

### Create an .env file

Create an `.env` file from `.env.example`

#### Linux / Mac

```shell script
cp .env.example .env
```

#### Windows

```shell script
copy .env.example .env
```

### Generate an APP_KEY

```shell script
php artisan key:generate
```

### Update the Database Settings

The `Posts` link uses Lorem Ipsum data from a MySQL database or Sqlite database.

#### MySql

For MySql, create a database on your MySql server and add the settings to the
**.env** file:

```text
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=YourDatabaseName
DB_USERNAME=YourDatabaseUserName
DB_PASSWORD=YourDatabaseUserPassword
```

#### Sqlite

Alternatively create an empty sqlite database and configure Laravel to use Sqlite

##### Sqlite on Linux / Mac

```shell script
touch database/database.sqlite
```

##### Sqlite on Windows

```shell script
fsutil file createnew database/database.sqlite 0
```

##### Edit the .env file

Edit the **.env** file, add sqlite as the DB_CONNECTION and delete all the other DB\_\* keys.

```sh
DB_CONNECTION=sqlite
DB_HOST=127.0.0.1   }
DB_PORT=3306        }
DB_DATABASE=laravel } Delete
DB_USERNAME=root    }
DB_PASSWORD=        }
```

### Create the database

Run the following command to create the database, you choose in your `.env` file and seed the `Posts` table
 with Lorem Ipsum data:

```shell script
php artisan migrate --seed
```

### Sqlite in Memory Testing Database

The `phpunit.xml` file has been configured for Sqlite in memory testing. This requires the pdo_sqlite extension to be 
 enabled in your `php.ini`. If there are any problems enabling the extension remove the following lines, PHPUnit
 will then to use the database configured in your `.env` file.

```xml
<server name="DB_CONNECTION" value="sqlite"/>
<server name="DB_DATABASE" value=":memory:"/>
```

### Run all tests

To make it easy to run all the PHPUnit tests a composer script has been created in composer.json. From the root of the
 projects, use `composer test` or `composer tests`

```shell script
composer test
```

### Serve website

To use the php web server, run the following artisan command:

```shell script
php artisan serve
```

### Open the website

See the message under the serve command for the website name and port, by default it is:

-   <http://127.0.0.1:8000>

**Laravel with Livewire** will display, with links to the examples from the Livewire site.

* Counter
* Data Binding
* Triggering Actions
* Contact Form
* Posts

See the Livewire site for details or take a look at the source code.

## Contributions

Feel free to leave comments for improvements. At this point this project is still in development, no contributions
 to the code is required. Feel free to fork or clone or copy for your own use.

## License

The project is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
