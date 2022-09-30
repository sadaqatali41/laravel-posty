# Laravel Posty

This is a simple laravel application which includes post creation deletion liking and unliking and includes email functionality when anyone likes post.

## Topic Covered
1. Laravel routing
2. Route model binding
3. Authentication
4. Email functionality
5. Component
6. Migrations
7. Policies
8. Eloquent relationship 

## Installation

Install [composer](https://getcomposer.org/download/) to run this app and open terminal and copy the below command.

```
git clone https://github.com/sadaqatali41/laravel-posty.git
```

## Usage
Database & Email setting in .env file.
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=posty
DB_USERNAME=root
DB_PASSWORD=

MAIL_MAILER=smtp
MAIL_HOST=smtpserverhost
MAIL_PORT=port
MAIL_USERNAME=username
MAIL_PASSWORD=password
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="youremailaddress"
MAIL_FROM_NAME="${APP_NAME}"
```
### Migration Setting
```
php artisan migrate
```

## Final Execution
```
php artisan serve
```