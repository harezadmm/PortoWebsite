# 🚀 PortoWebsite - Hariz Portfolio

<p align="center">
  <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="320" alt="Laravel Logo">
</p>

<p align="center">
  <a href="https://php.net"><img src="https://img.shields.io/badge/PHP-^8.1-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP Version"></a>
  <a href="https://laravel.com"><img src="https://img.shields.io/badge/Laravel-10.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel Version"></a>
  <a href="https://tailwindcss.com"><img src="https://img.shields.io/badge/Tailwind_CSS-3.x-06B6D4?style=for-the-badge&logo=tailwindcss&logoColor=white" alt="Tailwind CSS"></a>
  <a href="https://github.com/harezadmm/PortoWebsite"><img src="https://img.shields.io/badge/Status-Active-brightgreen?style=for-the-badge" alt="Status"></a>
</p>

---

## 📌 Deskripsi Proyek

**PortoWebsite Hariz** adalah aplikasi web portofolio interaktif dan modern yang dibangun dengan framework **Laravel**. Website ini dirancang untuk menampilkan berbagai karya, kemampuan teknis (skills), pengalaman, serta manajemen layanan secara dinamis melalui antarmuka admin dan tampilan publik yang responsif.

---

## ✨ Fitur Utama

- 🎨 **Modern & Dynamic UI/UX**: Tampilan bersih, responsif, dan animasi halus menggunakan Tailwind CSS & Alpine.js.
- 📁 **Portofolio & Project Showcase**: Menampilkan daftar proyek beserta kategori, teknologi yang digunakan, serta link demo/repository.
- ⚙️ **Admin Dashboard**: Manajer konten terintegrasi untuk mengelola proyek, keahlian, pesan masuk, dan statistik.
- 📬 **Interactive Contact Form**: Form kontak interaktif untuk menerima pesan langsung dari pengunjung.
- 📱 **Fully Responsive**: Optimal diakses dari perangkat Desktop, Tablet, maupun Smartphone.

---

## 🛠️ Teknologi yang Digunakan

- **Backend**: PHP 8.x, [Laravel Framework](https://laravel.com/)
- **Frontend**: Blade Templating, [Tailwind CSS](https://tailwindcss.com/), JavaScript / Vite
- **Database**: MySQL / MariaDB
- **Tools & Utilities**: Composer, NPM, Git

---

## 💻 Panduan Instalasi (Local Development)

Ikuti langkah-langkah di bawah ini untuk menjalankan proyek ini secara lokal di komputer Anda:

### 1. Prasyarat
- PHP `>= 8.1`
- Composer
- Node.js & NPM
- Database MySQL/MariaDB

### 2. Clone Repository
```bash
git clone https://github.com/harezadmm/PortoWebsite.git
cd PortoWebsite
```

### 3. Install Dependensi
```bash
# Install PHP dependencies
composer install

# Install Frontend dependencies
npm install
```

### 4. Konfigurasi Environment (`.env`)
Salin file `.env.example` menjadi `.env`:
```bash
cp .env.example .env
```
Buka file `.env` dan sesuaikan konfigurasi database Anda:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_porto_hariz
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Generate Application Key & Migrate Database
```bash
php artisan key:generate
php artisan migrate --seed
```

### 6. Jalankan Local Server
Buka dua jendela terminal dan jalankan perintah berikut:

**Terminal 1 (Laravel Development Server):**
```bash
php artisan serve
```

**Terminal 2 (Vite Asset Bundler):**
```bash
npm run dev
```

Buka browser dan akses alamat `http://127.0.0.1:8000`.

---

## 📂 Struktur Direktori Utama

```text
PortoWebsite/
├── app/                  # Logic aplikasi (Controllers, Models, Middleware)
├── bootstrap/            # Bootstrap & autoloader Laravel
├── config/               # File konfigurasi aplikasi
├── database/             # Migrations, Factories, & Seeders
├── public/               # Entry point (index.php) & static assets
├── resources/            # Views (Blade), CSS, JS
├── routes/               # Routing (web.php, api.php)
├── storage/              # File uploads, logs, cache
└── vite.config.js        # Konfigurasi Vite asset bundler
```

---

## 📄 Lisensi

Proyek ini dibuat untuk keperluan portofolio pribadi. Seluruh hak cipta dilindungi undang-undang.

---

<p align="center">
  Dibuat dengan ❤️ oleh <b>Hariz</b>
</p>
