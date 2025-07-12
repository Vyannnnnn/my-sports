@extends('layouts.app')
@section('title', 'Edit Produk')
@section('content')
<div class="form-box">
    <h2>Edit Produk</h2>
    <form method="POST" action="{{ route('admin.produk.update', $produk->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
            <label>Jenis Produk</label>
            <input type="text" name="jenis_produk" value="{{ $produk->jenis_produk }}" required>
        </div>
        <div>
            <label>Deskripsi</label>
            <input type="text" name="deskripsi" value="{{ $produk->deskripsi }}" required>
        </div>
        <div>
            <label>Harga</label>
            <input type="number" name="harga" value="{{ $produk->harga }}" required>
        </div>
        <div>
            <label>Gambar</label>
            <input type="file" name="gambar" accept="image/*">
            @if($produk->gambar)
            <img src="/storage/{{ $produk->gambar }}" width="60">
            @endif
        </div>
        <button type="submit">Save</button>
    </form>
</div>
@endsection