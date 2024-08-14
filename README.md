A shrimple web app for inventory
How to install it to your machine
0. Get PHP and commmposer on your local machine
1. Git clone it
2. Create the database "inventory" on your local machine
3. open terminal, go on the project directory and run "composer install" then run "php artisan migrate"
4. Go to this file app/Http/LoginController.php
5. Replace "A@e.a" with your own email, and "A" with your own password (This thing is designed for only one user and no I dont think there any hashing just plain text, is this secure? probably not lol)
6. run "php artisan serve" on the project directory
7. Open the link (its usually http://127.0.0.1:8000/)
8. Done!
