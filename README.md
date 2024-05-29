# Docker for Laravel
Docker compose setup untuk menjalankan aplikasi Laravel.

## Cara menggunakan
1. Clone repository ini ke dalam mesin lokal Anda.
2. Masuk ke direktori proyek.
3. Jalankan perintah berikut untuk menjalankan kontainer
    ```
    docker-compose up -d --build
    ```
4. Akses aplikasi Laravel di `http://localhost`.
### Cara umum untuk menginstall aplikasi Laravel
1. Siapkan File laravel
2. Paste filenya ke folder `src`
3. Jalankan perintah berikut untuk membuat container
    ```
    docker-compose up -d --build
    ```
4. Masuk ke dalam container
    ```
    docker-compose exec php-for-laravel bash
    ```
5. Install laravel
    ```
    composer install
    ```
6. Ubah Permission
    ```
    chmod -R 777 storage/*
    ```
7. Setting Database
    ```
    cp .env.example .env
    ```
    ```
    nano .env
    ```
    ```
    DB_CONNECTION=mysql
    DB_HOST=db
    DB_PORT=3306
    DB_DATABASE=laravel
    DB_USERNAME=root
    DB_PASSWORD=p455w0rd
    ```
    ```
    php artisan key:generate
    ```
    ```
    php artisan migrate
    ```
    ```
    php artisan db:seed
    ```
8. Akses aplikasi Laravel di `http://localhost`.
## Konfigurasi
Anda dapat menyesuaikan setup Docker dengan mengubah file `docker-compose.yml`.
### Mengganti versi PHP
Untuk mengganti versi PHP yang digunakan, ubah `PHP_VERSION` pada file `.env`.
### Membandingkan Module PHP

| Module PHP                     | PHP 8.3 | PHP 8.2 | PHP 8.1 | PHP 8.0 | PHP 7.4 | PHP 7.3 | PHP 7.2 | PHP 7.1 |
| ------------------------------ | ------- | ------- | ------- | ------- | ------- | ------- | ------- | ------- |
| soap                           |   ✔️   |    ✔️   |   ✔️   |   ✔️    |    ✔️   |   ✔️   |    ✔️   |   ✔️   |
| exif                           |   ✔️   |    ✔️   |   ✔️   |   ✔️    |    ✔️   |   ✔️   |    ✔️   |   ✔️   |
| pcntl                          |   ✔️   |    ✔️   |   ✔️   |   ✔️    |    ✔️   |   ✔️   |    ✔️   |   ✔️   |
| intl                           |   ✔️   |    ✔️   |   ✔️   |   ✔️    |    ✔️   |   ✔️   |    ✔️   |   ✔️   |
| gmp                            |   ✔️   |    ✔️   |   ✔️   |   ✔️    |    ✔️   |   ✔️   |    ✔️   |   ✔️   |
| zip                            |   ✔️   |    ✔️   |   ✔️   |   ✔️    |    ✔️   |   ✔️   |    ✔️   |   ✔️   |
| pdo_mysql                      |   ✔️   |    ✔️   |   ✔️   |   ✔️    |    ✔️   |   ✔️   |    ✔️   |   ✔️   |
| pdo_pgsql                      |   ✔️   |    ✔️   |   ✔️   |   ✔️    |    ✔️   |   ✔️   |    ✔️   |   ✔️   |
| bcmath                         |   ✔️   |    ✔️   |   ✔️   |   ✔️    |    ✔️   |   ✔️   |    ✔️   |   ✔️   |
| redis                          |   ✔️   |    ✔️   |   ✔️   |   ✔️    |    ✔️   |   ✔️   |    ✔️   |   ❌   |
| mongodb                        |   ✔️   |    ✔️   |   ✔️   |   ✔️    |    ❌   |   ❌   |    ❌   |   ❌   |
| imagick                        |   ✔️   |    ✔️   |   ✔️   |   ✔️    |    ✔️   |   ✔️   |    ✔️   |   ✔️   |
| gd                             |   ✔️   |    ✔️   |   ✔️   |   ✔️    |    ✔️   |   ✔️   |    ✔️   |   ✔️   |
| gd --with-freetype --with-jpeg |   ✔️   |    ✔️   |   ✔️   |   ✔️    |    ❌   |   ❌   |    ❌   |   ✔️   |
| xdebug                         |   ✔️   |    ✔️   |   ✔️   |   ✔️    |    ❌   |   ❌   |    ❌   |   ❌   |
| memcached                      |   ✔️   |    ✔️   |   ✔️   |   ✔️    |    ✔️   |   ✔️   |    ✔️   |   ✔️   |
