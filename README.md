# AnimeDB

AnimeDB adalah aplikasi web yang dibangun dengan Laravel yang memungkinkan pengguna untuk mencari, menjelajahi, dan menemukan anime. Aplikasi ini menyediakan fitur seperti pencarian anime, melihat daftar anime terpopuler, dan menjelajahi anime berdasarkan genre.

## Fitur

- 🔍 Pencarian anime berdasarkan judul
- 📊 Melihat daftar anime terpopuler
- 🏷️ Menjelajahi anime berdasarkan genre
- 🎨 Antarmuka modern dengan Tailwind CSS
- 📱 Desain responsif untuk semua perangkat

## Prasyarat

Sebelum memulai, pastikan Anda telah menginstal:
- PHP >= 8.1
- Composer
- SQLite (atau database lain yang didukung Laravel)
- Node.js & NPM (untuk kompilasi aset)

## Instalasi

1. Clone repository:
```bash
git clone https://github.com/fazar301/animedb.git
cd animedb
```

2. Instal dependensi PHP:
```bash
composer install
```

3. Buat file environment:
```bash
cp .env.example .env
```

4. Generate kunci aplikasi:
```bash
php artisan key:generate
```

5. Konfigurasi database:
   - Proyek ini menggunakan SQLite secara default
   - Buat file baru `database/database.sqlite`
   - Atau ubah `.env` untuk menggunakan database pilihan Anda

6. Jalankan migrasi:
```bash
php artisan migrate
```

7. Mulai server pengembangan:
```bash
php artisan serve
```

## Variabel Environment

Variabel environment berikut perlu diatur di file `.env` Anda:

- `APP_NAME`: Nama aplikasi Anda
- `APP_ENV`: Environment (local, production, dll)
- `APP_DEBUG`: Mode debug (true/false)
- `APP_URL`: URL aplikasi Anda
- `RAPIDAPI_KEY`: Kunci RapidAPI untuk data anime
- `DB_CONNECTION`: Koneksi database (default: sqlite)

## Struktur Proyek

```
resources/
├── views/
│   └── components/
│       └── layouts/
│           ├── app.blade.php      # Komponen layout utama
│           ├── header.blade.php   # Komponen header
│           ├── footer.blade.php   # Komponen footer
│           └── search-form.blade.php # Komponen form pencarian
```

## Berkontribusi

1. Fork repository
2. Buat branch fitur (`git checkout -b fitur/namafitur`)
3. Commit perubahan Anda (`git commit -m 'Menambahkan fitur baru'`)
4. Push ke branch (`git push origin fitur/namafitur`)
5. Buat Pull Request

## Lisensi

Proyek ini adalah perangkat lunak open-source yang dilisensikan di bawah [lisensi MIT](https://opensource.org/licenses/MIT).

## Penulis

Dibuat oleh [Fazar Adi Putra](https://github.com/fazar301)

## Ucapan Terima Kasih

- [Laravel](https://laravel.com)
- [Tailwind CSS](https://tailwindcss.com)
- [Jikan API](https://jikan.moe) untuk data anime