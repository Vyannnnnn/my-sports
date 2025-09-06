<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function index(Request $request)
    {
        $produk = Produk::orderBy('id')
            ->orderBy('jenis_produk')
            ->orderBy('deskripsi')
            ->get();

        // Jika database kosong, tampilkan data dummy
        if ($produk->isEmpty()) {
            $produk = collect([
                (object)[
                    'id' => 1,
                    'jenis_produk' => 'Bola Sepak',
                    'deskripsi' => 'Bola standar FIFA',
                    'harga' => 150000,
                    'gambar' => null,
                    'lokasi' => 'Jakarta',
                    'rating' => 4.7
                ],
                (object)[
                    'id' => 2,
                    'jenis_produk' => 'Raket Badminton',
                    'deskripsi' => 'Raket ringan untuk pemula',
                    'harga' => 120000,
                    'gambar' => null,
                    'lokasi' => 'Bandung',
                    'rating' => 4.5
                ],
                (object)[
                    'id' => 3,
                    'jenis_produk' => 'Sepatu Lari',
                    'deskripsi' => 'Sepatu lari anti slip',
                    'harga' => 250000,
                    'gambar' => null,
                    'lokasi' => 'Surabaya',
                    'rating' => 4.8
                ],
                (object)[
                    'id' => 3,
                    'jenis_produk' => 'Sepatu Lari',
                    'deskripsi' => 'Sepatu lari anti slip',
                    'harga' => 250000,
                    'gambar' => null,
                    'lokasi' => 'Surabaya',
                    'rating' => 4.8
                ],
                (object)[
                    'id' => 3,
                    'jenis_produk' => 'Sepatu Lari',
                    'deskripsi' => 'Sepatu lari anti slip',
                    'harga' => 250000,
                    'gambar' => null,
                    'lokasi' => 'Surabaya',
                    'rating' => 4.8
                ],
                (object)[
                    'id' => 3,
                    'jenis_produk' => 'Sepatu Lari',
                    'deskripsi' => 'Sepatu lari anti slip',
                    'harga' => 250000,
                    'gambar' => null,
                    'lokasi' => 'Surabaya',
                    'rating' => 4.8
                ],
                (object)[
                    'id' => 3,
                    'jenis_produk' => 'Sepatu Lari',
                    'deskripsi' => 'Sepatu lari anti slip',
                    'harga' => 250000,
                    'gambar' => null,
                    'lokasi' => 'Surabaya',
                    'rating' => 4.8
                ],
                (object)[
                    'id' => 3,
                    'jenis_produk' => 'Sepatu Lari',
                    'deskripsi' => 'Sepatu lari anti slip',
                    'harga' => 250000,
                    'gambar' => null,
                    'lokasi' => 'Surabaya',
                    'rating' => 4.8
                ],
                (object)[
                    'id' => 3,
                    'jenis_produk' => 'Sepatu Lari',
                    'deskripsi' => 'Sepatu lari anti slip',
                    'harga' => 250000,
                    'gambar' => null,
                    'lokasi' => 'Surabaya',
                    'rating' => 4.8
                ],
                (object)[
                    'id' => 3,
                    'jenis_produk' => 'Sepatu Lari',
                    'deskripsi' => 'Sepatu lari anti slip',
                    'harga' => 250000,
                    'gambar' => null,
                    'lokasi' => 'Surabaya',
                    'rating' => 4.8
                ],
                (object)[
                    'id' => 3,
                    'jenis_produk' => 'Sepatu Lari',
                    'deskripsi' => 'Sepatu lari anti slip',
                    'harga' => 250000,
                    'gambar' => null,
                    'lokasi' => 'Surabaya',
                    'rating' => 4.8
                ],
                (object)[
                    'id' => 3,
                    'jenis_produk' => 'Sepatu Lari',
                    'deskripsi' => 'Sepatu lari anti slip',
                    'harga' => 250000,
                    'gambar' => null,
                    'lokasi' => 'Surabaya',
                    'rating' => 4.8
                ],
            ]);
        }
        return view('produk.index', compact('produk'));
    }
}
