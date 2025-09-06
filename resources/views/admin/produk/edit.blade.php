@extends('layouts.app')
@section('title', 'Edit Produk')
@section('content')
<div class="form-box">
    <h2>Edit Produk</h2>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul style="margin: 0; padding-left: 1.2rem;">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form method="POST" action="{{ route('admin.produk.update', $produk->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
            <label>Jenis Produk</label>
            <input  type="text" name="jenis_produk" value="{{ $produk->jenis_produk }}" required>
        </div>
        <div>
            <label>Deskripsi</label>
            <textarea style="max-width: 430px; width:430px; height:150px;" type="text" name="deskripsi" required>{{ $produk->deskripsi }}</textarea>
        </div>
        <div>
            <label>Harga</label>
            <input type="number" name="harga" value="{{ $produk->harga }}" required>
        </div>
        <div style="display: flex; flex-direction: column; gap: 1rem; margin-top:1rem">
            <div>
                <label>Gambar</label>
                <input type="file" name="gambar" accept="image/*">
            </div>
            @if($produk->gambar)
            <img src="/storage/{{ $produk->gambar }}" width="100">
            @endif
        </div>

        <button type="submit" class="btn" style="margin-top: 1rem;">Simpan</button>
        <a href="{{ route('admin.produk.index') }}" class="btn-secondary" style="background-color: #6c757d; margin-bottom: 1rem;">← Kembali</a>
        <script>
            document.querySelector('input[name="gambar"]').addEventListener('change', function(e) {
                const file = e.target.files[0];
                if (file && file.size > 3 * 1024 * 1024) {
                    alert("Ukuran gambar maksimal 3MB.");
                    e.target.value = ""; // Reset input
                }
            });
        </script>
    </form>
</div>
@endsection