<h1 align="center">Health Care Information System Using QR Code</h1>

<p align="justify">Develop to save more time and secure the data of patients and to make track of them if they have a virus that can spread faster.</p>

Authors: <br>
• <a href="#">GELI, LEA L.</a> <br>
• <a href="#">TAPIADOR, PRINCE PATRICK G.</a> <br>

Programmers: <br>
• <a href="https://abby2727.github.io/my-portfolio/">Abdul A. Pangandaman</a> <br>
• <a href="http://www.cbate.me/">Christian Dave M. Bate</a> <br>
• <a href="https://johnphilipestobo.me/">John Philip T. Estobo</a> <br>

## Objectives
•   enable multi-channel communication. <br>
•   improve the waiting room. <br>
•   eliminate the pen and paper registration. <br>
•   to show the information of the health center’s personnel. <br>
•   to have a good inventory system. <br>

## Requirement
•   PHP 7.3 or higher

## Installation
Setting up your development environment on your local machine:
```
git clone https://github.com/abby2727/hospital-care-info.git
cd hospital-care-info
cp .env.example .env
composer install (or composer update)
php artisan key:generate
php artisan migrate
php artisan optimize
php artisan serve
```
## Before Starting

Create Database and Set-up db credential on .env
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=hospital_care_info
DB_USERNAME={USERNAME}
DB_PASSWORD={PASSWORD}
```
