## Prerequisites
Sebelum menginstal Laravel, pastikan sistem Anda memenuhi persyaratan berikut:

- **PHP**: Versi 8.1 atau lebih baru
- **Composer**: Dependency manager untuk PHP
- **Database**: MySQL, PostgreSQL, SQLite, atau SQL Server
- **Web Server**: Apache atau Nginx

## Installation Steps

### 1. Install Composer
Laravel menggunakan Composer untuk mengelola dependensi. Jika belum terinstal, unduh dan instal Composer dari [https://getcomposer.org/](https://getcomposer.org/).

### 2. Install Laravel
```sh
composer update
```
## 3.Konfigurasi Library
```sh
composer require php-flasher/flasher-laravel
```

## Additional Setup

### Install Node.js dan NPM (Opsional)
Jika menggunakan Laravel Mix untuk asset bundling, pastikan Node.js dan npm telah terinstal. Kemudian, jalankan perintah berikut:
```sh
npm install
npm run dev
```

---
### 4. Konfigurasi Environment
Salin file `.env.example` menjadi `.env`:
```sh
cp .env.example .env
```

Kemudian, jalankan perintah berikut untuk menghasilkan application key:
```sh
php artisan key:generate
```

### 5. Konfigurasi Database
Edit file `.env` dan sesuaikan dengan konfigurasi database Anda:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database
DB_USERNAME=root
DB_PASSWORD=
```
Setelah itu, jalankan migrasi database:
```sh
php artisan migrate
```

### 6. Jalankan Server Laravel
Untuk menjalankan server pengembangan Laravel, gunakan perintah berikut:
```sh
php artisan serve
```
Akses aplikasi melalui browser di `http://127.0.0.1:8000`.

Selamat! Anda telah berhasil menginstal Laravel 🎉

