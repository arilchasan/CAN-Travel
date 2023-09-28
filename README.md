
## Default Account for testing

**Admin Default Account**

-   username: admin
-   Password: admin


## Install

1. **Clone Repository**

```bash
git clone https://github.com/arilchasan/CAN-Travel.git
cd CAN-Travel
composer install
cp .env.example .env
```

2. **Buka `.env` lalu ubah baris berikut sesuai dengan databasemu yang ingin dipakai**

```bash
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

3. **Instalasi website**

```bash
php artisan key:generate
php artisan migrate --seed
```

4. **Jalankan website**

```bash
php artisan serve
```

## Author

-   Instagram : <a href="https://www.instagram.com/arilchasan_/"> Aril Chasan</a>
-   LinkedIn : <a href="https://www.linkedin.com/in/arilchasan/"> Aril Chasan</a>
