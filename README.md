Requirements: 
============

* php 7.1 +

* Apache mod_rewrite on

* nodejs 8.* +


Installation:
============

1. use command "git clone https://github.com/Vladnpr/table-api.git" for cloning project into selected folder

2. use command "composer install" for installing framework

3. copy ".env.example" file to ".env" and set your configurations.

4. "php artisan key:generate"

5. "npm install"

6. "npm run prod"

7. "php artisan migrate --seed"

tables for testing: "posts" and "tasks"

hostname/tablename - access to all table items
hostname/tablename/id - access to one table item