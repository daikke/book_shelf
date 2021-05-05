# Laravel API
## Stack includes
* Laravel (6.20.26 version)
## Installation

**1. Copy environment files**
```
cp .env.example .env
```

**2. Edit DB Username and Password**
.env
```
DB_USER=example
DB_PASS=example
```
src/.env
```
DB_USER=example
DB_PASS=example

DB_USERNAME=example
DB_PASSWORD=example
```

**3. install laravel**
```
composer install
```

**4. Generate Laravel's APP Key**
```
php artisan key:generate
```

**5. run serve**
```
php artisan serve
```

Now, you can access the URL http://localhost:8080 and can see Top page.

