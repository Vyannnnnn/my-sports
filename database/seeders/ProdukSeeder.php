<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produk;

class ProdukSeeder extends Seeder
{
    public function run(): void
    {
        $produk = [
            ['jenis_produk' => 'Sepatu Lari Nike ZoomX', 'deskripsi' => 'Sepatu lari ultra ringan dengan bantalan responsif, cocok untuk maraton.', 'harga' => 1750000],
            ['jenis_produk' => 'Adidas Ultraboost 21', 'deskripsi' => 'Teknologi Boost memberikan kenyamanan maksimal saat lari harian.', 'harga' => 2200000],
            ['jenis_produk' => 'Puma Deviate Nitro', 'deskripsi' => 'Dirancang untuk kecepatan, ringan dan empuk.', 'harga' => 1550000],
            ['jenis_produk' => 'New Balance Fresh Foam X', 'deskripsi' => 'Sepatu lari jarak jauh dengan foam lembut dan stabilitas ekstra.', 'harga' => 1800000],
            ['jenis_produk' => 'ASICS Gel-Kayano 30', 'deskripsi' => 'Support maksimal dan shock absorption terbaik untuk pelari berat.', 'harga' => 2400000],
            ['jenis_produk' => 'Reebok Nano X3', 'deskripsi' => 'Cocok untuk gym dan lari ringan, grip kuat dan fleksibel.', 'harga' => 1600000],
            ['jenis_produk' => 'Nike Metcon 9', 'deskripsi' => 'Sepatu training dengan stabilitas untuk angkat beban dan HIIT.', 'harga' => 1900000],
            ['jenis_produk' => 'Adidas Adizero Adios Pro 3', 'deskripsi' => 'Sepatu racing elite, karbon plate & Lightstrike Pro midsole.', 'harga' => 3100000],
            ['jenis_produk' => 'Mizuno Wave Rider 27', 'deskripsi' => 'Responsif dan nyaman untuk lari harian, desain aerodinamis.', 'harga' => 1700000],
            ['jenis_produk' => 'Under Armour HOVR Machina 3', 'deskripsi' => 'Dilengkapi sensor tracking & foam HOVR yang empuk dan responsif.', 'harga' => 2300000],
            ['jenis_produk' => 'On Cloudswift', 'deskripsi' => 'Teknologi CloudTec untuk transisi halus dan support perkotaan.', 'harga' => 2000000],
            ['jenis_produk' => 'Salomon Speedcross 6', 'deskripsi' => 'Sepatu trail dengan grip tajam dan tahan air, cocok untuk medan terjal.', 'harga' => 2100000],
            ['jenis_produk' => 'Brooks Ghost 15', 'deskripsi' => 'Cushioning lembut dan responsif untuk daily training.', 'harga' => 1850000],
            ['jenis_produk' => 'Saucony Endorphin Speed 3', 'deskripsi' => 'Midsole plated untuk kecepatan dan efisiensi energi.', 'harga' => 2500000],
            ['jenis_produk' => 'Nike Pegasus 40', 'deskripsi' => 'All-around runner untuk segala jenis latihan lari.', 'harga' => 1650000],
            ['jenis_produk' => 'ASICS Novablast 3', 'deskripsi' => 'Bounce tinggi dan ringan, cocok untuk pelari netral.', 'harga' => 1780000],
        ];

        foreach ($produk as $item) {
            Produk::create($item);
        }
    }
}
