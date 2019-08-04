# RV-Masonry

Masonry works by placing elements in optimal position based on available vertical space, sort of like a mason fitting stones in a wall.


### Prerequisites

* PHP 7 
* Composer
* Node.js

### Installation

* Clone project to a specific folder
```
git clone https://github.com/nxsmtech/masonry.git
```
* Set up your .env file by cloning .env.example file and changing the setting for database according to your virtual server settings (example below)
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=masonry
DB_USERNAME=root
DB_PASSWORD=
```

* Use composer install to get all needed dependencies from composer.json file :
```
composer install
```

* Generate your application key with :
```
php artisan key:generate
```

* Install dependecies from package.json for node modules :
```
npm install
```

* Generate js and css files by using :
```
npm run dev
```

Set up your local server and database. 
Create a database that you have specified in your .env file 
and run :

```
php artisan migrate
```
This will launch migration and database seed, that creates "blocks" table and fills it with 1 million rows. 
This will take around 5 min. "Blocks" table is filled with random number (1-5000) for rand_num column and random number (100-200) for rand_height column.
This data will be used to display blocks in view. 

After this you hit serve and see the result in your browser
```
php artisan serve
```

## Built With

* [Laravel 5.8](https://laravel.com/) - PHP Framework
* [Masonry](https://masonry.desandro.com/) - Cascading grid layout library
* [Infinite Scroll](https://infinite-scroll.com/) - Automatically add next page
* [Node.js](https://nodejs.org/en/) - Node.js® is a JavaScript runtime built on Chrome's V8 JavaScript engine.








