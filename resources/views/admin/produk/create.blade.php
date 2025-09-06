@extends('layouts.app')
@section('title', 'Tambah Produk')

@section('content')
<div class="form-box">
    <h2>Tambah Produk</h2>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul style="margin: 0; padding-left: 1.2rem;">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form method="POST" action="{{ route('admin.produk.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-tambah" style="display: flex; flex-direction: column; gap: 0.4rem;">
            <div>
                <label>Jenis Produk</label>
                <input type="text" name="jenis_produk" required>
            </div>
            <div>
                <label>Deskripsi</label>
                <textarea style="max-width: 430px; width:430px; height:150px;" type="text" name="deskripsi" required></textarea>
            </div>
            <div>
                <label>Harga</label>
                <input type="number" name="harga" required>
            </div>
            <div>
                <label>Gambar</label>
                <input type="file" name="gambar" accept="image/*" onchange="validateImage(this)">
                <div id="preview" style="margin-top: 1rem;"></div>
            </div>
        </div>
        <button type="submit" class="btn" style="margin-top: 1rem;">Simpan</button>
        <a href="{{ route('admin.produk.index') }}" class="btn-secondary" style="background-color: #6c757d; margin-bottom: 1rem;">← Kembali</a>

    </form>
</div>

<script>
    function validateImage(input) {
        const file = input.files[0];
        const preview = document.getElementById('preview');
        preview.innerHTML = ''; // Clear preview

        if (file) {
            if (file.size > 3 * 1024 * 1024) {
                alert("Ukuran gambar maksimal 3MB.");
                input.value = "";
                return;
            }

            const reader = new FileReader();
            reader.onload = function(e) {
                const img = document.createElement('img');
                img.src = e.target.result;
                img.style.maxWidth = '150px';
                img.style.marginTop = '10px';
                preview.appendChild(img);
            };
            reader.readAsDataURL(file);
        }
    }
</script>

@endsection