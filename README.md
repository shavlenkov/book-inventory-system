# book-inventory-system

### Showcase
<img src="./showcase.gif" width="1024">

### About project
This project is a book inventory system. it also has an admin panel Filament for viewing, creating, editing, deleting books and users.

### Tools for launching the project
To start the project, you will need:

1. PHP >= **8.2.6**
2. Laravel >= **10**
3. Composer >= **2.3.7**
4. Filament >= **2.17**
5. Docker >= **20.10.18**
6. Docker Compose >= **1.29.2**

### How to launch the project?
1. Clone a repository:

   `git clone https://github.com/shavlenkov/book-inventory-system.git`
2. Go to the book-inventory-system folder:

   `cd book-inventory-system`
3. Make an .env file from the .env.example file:

   `cp .env.example .env`
4. Make the necessary configuration changes to the .env file:
```
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```
5. Install all dependencies using Composer:

   `composer install`
6. Install all dependencies using npm:

   `npm install`
7. Run containers using Docker Compose:

   `docker-compose up -d`
8. Connect to the container:

   `docker exec -it book-inventory-system_laravel.test_1 bash`
    1. Give the correct access rights to the storage and bootstrap folders:

       `chmod -R 777 ./bootstrap`
    2. Generate App Key:

       `php artisan key:generate`
    3. Run migrations:

       `php artisan migrate`
    4. Run factories:

       `php artisan db:seed`
    5. Сreate an admin:

       `php artisan create:admin`
    6. Run server:

       `npm run dev`
9. Open a browser and go to the admin panel at the address:
   [http://localhost/admin](http://localhost/admin "http://localhost/admin")
