# Oil Change Checker (Laravel 12)

A small Laravel 12 app that determines whether a car is due for an oil change based on:
- More than **5000 km** since the last oil change, OR
- More than **6 months** since the last oil change

The app saves each submission in a **SQLite** database and shows a **unique result page** that still works after refresh.

---

## Requirements
- PHP 8.2+
- Composer
- MySQL

How to Run the Oil Change Checker Project

 1️⃣ Clone the Repository
git clone https://github.com/joshnajoseph-codes/oil-app.git

cd oil-app

2️⃣ Install Dependencies
composer install

3️⃣ Environment Setup

4️⃣ Start Database (MySQL)

Open XAMPP
Start Apache and MySQL
Create database: oil_checks
(http://localhost/phpmyadmin)

5️⃣ Configure Database

Update .env:

DB_CONNECTION=mysql

DB_HOST=127.0.0.1

DB_PORT=3306

DB_DATABASE=oil_checks

DB_USERNAME=root

DB_PASSWORD=


Clear config:

php artisan config:clear

6️⃣ Run Migrations
php artisan migrate

7️⃣ Run the Application
php artisan serve


Open:

http://127.0.0.1:8000

8️⃣ Test (Sample Input)

Current Odometer: 60000

Previous Oil Change Date: 2025-03-01

Odometer at Previous Change: 54000

✅ Expected: Car is due for an oil change
