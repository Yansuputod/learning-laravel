# Learning Laravel

## 📌 Deskripsi
Proyek ini adalah latihan dalam menggunakan Laravel untuk membangun aplikasi web modern dan skalabel.

## 🚀 Instalasi

1. **Clone repository**
   ```bash
   git clone https://github.com/Yansuputod/learning-laravel.git
   cd learning-laravel
   ```

2. **Install dependensi**
   ```bash
   composer install
   npm install
   ```

3. **Buat file konfigurasi `.env`**
   ```bash
   cp .env.example .env
   ```
   Edit file `.env` sesuai kebutuhan.

4. **Generate application key**
   ```bash
   php artisan key:generate
   ```

5. **Migrate database** (Pastikan database sudah dibuat)
   ```bash
   php artisan migrate
   ```

6. **Jalankan server lokal**
   ```bash
   php artisan serve
   ```
   Akses aplikasi di `http://127.0.0.1:8000`

## 📦 Fitur
- [ ] Autentikasi pengguna
- [ ] CRUD data
- [ ] API dengan Laravel Sanctum
- [ ] Manajemen role dan permission

## 🔧 Teknologi yang Digunakan
- Laravel
- MySQL
- Tailwind CSS
- Vue.js (opsional)

## 📜 Lisensi
Proyek ini menggunakan lisensi **MIT**. Silakan digunakan dan dikembangkan lebih lanjut.

