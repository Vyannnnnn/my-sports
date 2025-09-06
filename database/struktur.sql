-- Tabel produk
CREATE TABLE IF NOT EXISTS produk (
    id INT AUTO_INCREMENT PRIMARY KEY,
    jenis_produk VARCHAR(100) NOT NULL,
    deskripsi TEXT NOT NULL,
    harga DECIMAL(10,2) NOT NULL,
    gambar VARCHAR(255) DEFAULT NULL
);

-- Tabel users
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role ENUM('admin','pembeli') NOT NULL DEFAULT 'pembeli'
);
