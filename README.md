![Laravel Logo](https://laravel.com/img/logomark.min.svg)

# Projek Agenda Guru Laravel

Projek ini adalah aplikasi agenda guru yang dibangun menggunakan Laravel 10. Aplikasi ini memungkinkan guru untuk mengelola mata pelajaran, kelas, dan jurusan,serta pengisian journal harian

## Fitur

- Autentikasi pengguna
- Manajemen mata pelajaran
- Manajemen kelas
- Manajemen jurusan
- manajemen agenda
- Cetak laporan

## Persyaratan

- PHP >= 8.0
- Composer
- MySQL

## Instalasi

1. Clone repository ini:

    ```bash
    git clone https://github.com/username/projek-agenda-guru-laravel.git
    cd projek-agenda-guru-laravel
    ```

2. Install dependencies menggunakan Composer:

    ```bash
    composer install
    ```

3. Salin file `.env.example` menjadi `.env` dan sesuaikan konfigurasi database:

    ```bash
    cp .env.example .env
    ```

4. Generate application key:

    ```bash
    php artisan key:generate
    ```

5. Migrasi dan seed database:

    ```bash
    php artisan migrate --seed
    ```

6. Jalankan server pengembangan:

    ```bash
    php artisan serve
    ```

Aplikasi sekarang dapat diakses di `http://localhost:8000`.

## Penggunaan

1. Daftar atau login sebagai pengguna.
2. Tambahkan mata pelajaran, kelas, dan jurusan.
3. Cetak laporan melalui halaman yang tersedia.

## Kontribusi

Silakan buat pull request untuk kontribusi atau buka issue untuk melaporkan bug.

## Lisensi

Projek ini dilisensikan di bawah [MIT License](LICENSE).
