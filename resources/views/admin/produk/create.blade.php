@extends('layouts.app')
@section('title', 'Tambah Produk')
@section('content')
<div class="form-box">
    <h2>Tambah Produk</h2>
    <form method="POST" action="{{ route('admin.produk.store') }}" enctype="multipart/form-data">
        @csrf
        <div>
            <label>Jenis Produk</label>
            <input type="text" name="jenis_produk" required>
        </div>
        <div>
            <label>Deskripsi</label>
            <input type="text" name="deskripsi" required>
        </div>
        <div>
            <label>Harga</label>
            <input type="number" name="harga" required>
        </div>
        <div>
            <label>Gambar</label>
            <input type="file" name="gambar" accept="image/*">
        </div>
        <button type="submit">Save</button>
    </form>
</div>
@endsection