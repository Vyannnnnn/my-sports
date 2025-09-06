<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# My Sports - Sistem Manajemen Toko Peralatan Olahraga

My Sports adalah aplikasi web yang dirancang khusus untuk mengelola toko peralatan olahraga. Aplikasi ini dibangun menggunakan Laravel framework untuk memberikan solusi yang robust dan scalable dalam mengelola inventori, penjualan, dan operasional toko olahraga.

## 📋 Tentang Project

Website ini dikembangkan sebagai solusi digital untuk mengelola berbagai aspek bisnis toko peralatan olahraga, mulai dari manajemen produk, inventori, hingga transaksi penjualan. Dengan interface yang user-friendly dan fitur yang komprehensif, aplikasi ini membantu pemilik toko untuk mengoptimalkan operasional bisnis mereka.

## ✨ Fitur Utama

- 🏪 **Manajemen Toko**: Kelola informasi toko dan pengaturan sistem
- 📦 **Manajemen Produk**: CRUD produk peralatan olahraga dengan kategori
- 📊 **Inventori**: Tracking stok barang dan notifikasi stok menipis  
- 💰 **Sistem Penjualan**: Proses transaksi dan pembayaran
- 📈 **Laporan**: Dashboard analitik dan laporan penjualan
- 👥 **Manajemen User**: Role-based access control untuk admin dan staff
- 🔍 **Pencarian & Filter**: Pencarian produk berdasarkan kategori, harga, dll

## 🛠️ Teknologi yang Digunakan

- **Backend**: Laravel (PHP Framework)
- **Database**: MySQL
- **Frontend**: Blade Templates, Bootstrap/Tailwind CSS
- **Authentication**: Laravel Auth
- **Package Manager**: Composer

## 📋 Requirement

- PHP >= 8.1
- Composer
- MySQL >= 5.7
- Node.js & NPM (untuk asset compilation)
- Web Server (Apache/Nginx)

## 🚀 Instalasi

1. **Clone repository**
   ```bash
   git clone https://github.com/Vyannnnnn/my-sports.git
   cd my-sports
   ```

2. **Install dependencies**
   ```bash
   composer install
   npm install
   ```

3. **Environment setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Database configuration**
   - Buat database MySQL baru
   - Update konfigurasi database di file `.env`
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=my_sports
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

5. **Migration & Seeding**
   ```bash
   php artisan migrate --seed
   ```

6. **Asset compilation**
   ```bash
   npm run dev
   # atau untuk production
   npm run build
   ```

7. **Run application**
   ```bash
   php artisan serve
   ```

## 🏗️ Struktur Database

### Tabel Utama:
- **users**: Data pengguna (admin, staff)
- **categories**: Kategori produk olahraga
- **products**: Data produk peralatan olahraga
- **transactions**: Record transaksi penjualan
- **transaction_details**: Detail item dalam transaksi
- **inventory**: Management stok barang

## 👥 User Roles

- **Super Admin**: Full access ke semua fitur
- **Admin**: Manajemen produk, inventori, dan laporan
- **Staff**: Input transaksi dan lihat inventori


## 📞 Contact

**Developer**: Vyannnnnn  
**Repository**: [https://github.com/Vyannnnnn/my-sports](https://github.com/Vyannnnnn/my-sports)

---

<p align="center">Made with ❤️ for sports equipment store management</p>
