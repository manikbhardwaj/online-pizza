# The Online Pizza

![Website Screenshot](/screenshot.png)

A pizza ordering website written in React, using redux for state management. Authentication supported via Laravel and payment integration done via Stripe.

In stripe payment i have used test mode and API key for same is already entered in env.js file. 

Test cards for payment are given in this url:
https://stripe.com/docs/testing#cards

Installation instructions:

For Frontend:
```sh
1) run npm install on root
2) edit env.js in src folder for API_URL (laravel may be http://localhost:8000)
3) npm start
4) access website through url -- http://localhost:3000/
```

for Backend (Laravel):
```sh
1) cd backend and run php composer install
2) cp .env.example .env and add database credentials in .env file (make sure to create database at that step in mysql)
3) run php artisan key:generate in cmd line
4) php artisan migrate
5) php artisan db:seed (for adding pizza menu and user entries in database)
6) php artisan serve
```
