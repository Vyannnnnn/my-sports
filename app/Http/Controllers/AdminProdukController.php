<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use Illuminate\Support\Facades\Storage;

class AdminProdukController extends Controller
{
    public function index(Request $request)
{
    $sortBy = $request->get('sort_by', 'id');
    $order = $request->get('order', 'asc');

    $allowedSorts = ['id', 'jenis_produk', 'deskripsi'];
    if (!in_array($sortBy, $allowedSorts)) {
        $sortBy = 'id';
    }

    $produk = Produk::orderBy($sortBy, $order)->get();

    return view('admin.produk.index', compact('produk', 'sortBy', 'order'));
}


    public function create()
    {
        return view('admin.produk.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'jenis_produk' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required|numeric',
            'gambar' => 'nullable|image|max:3072',
        ]);
        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('produk', 'public');
        }
        Produk::create($data);
        return redirect()->route('admin.produk.index');
    }

    public function edit($id)
    {
        $produk = Produk::findOrFail($id);
        return view('admin.produk.edit', compact('produk'));
    }

    public function update(Request $request, $id)
    {
        $produk = Produk::findOrFail($id);
        $data = $request->validate([
            'jenis_produk' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required|numeric',
            'gambar' => 'nullable|image|max:2048',
        ]);
        if ($request->hasFile('gambar')) {
            if ($produk->gambar) Storage::disk('public')->delete($produk->gambar);
            $data['gambar'] = $request->file('gambar')->store('produk', 'public');
        }
        $produk->update($data);
        return redirect()->route('admin.produk.index');
    }

    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        if ($produk->gambar) Storage::disk('public')->delete($produk->gambar);
        $produk->delete();
        return redirect()->route('admin.produk.index') ->with('success', 'Produk berhasil dihapus.');
    }
}
