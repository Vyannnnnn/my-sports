@extends('layouts.app')
@section('title', 'Kelola Produk')
@section('content')
<div class="produk-list">
    <h1>Kelola Produk</h1>
    <a href="{{ route('admin.produk.create') }}" class="btn">Tambah Produk</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Jenis Produk</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($produk as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->jenis_produk }}</td>
                <td>{{ $item->deskripsi }}</td>
                <td>Rp{{ number_format($item->harga,0,',','.') }}</td>
                <td>@if($item->gambar)<img src="/storage/{{ $item->gambar }}" width="60">@endif</td>
                <td>
                    <a href="{{ route('admin.produk.edit', $item->id) }}" title="Edit"><span class="icon-edit"></span></a>
                    <form action="{{ route('admin.produk.destroy', $item->id) }}" method="POST" style="display:inline">
                        @csrf @method('DELETE')
                        <button type="submit" title="Delete" class="icon-btn"><span class="icon-delete"></span></button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6">Belum ada produk.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
@push('styles')
<style>
    .icon-edit::before {
        content: '\270E';
        color: #1976d2;
        font-size: 1.2em;
    }

    .icon-delete::before {
        content: '\1F5D1';
        color: #d32f2f;
        font-size: 1.2em;
    }

    .icon-btn {
        background: none;
        border: none;
        cursor: pointer;
    }

    .btn {
        background: #1e90ff;
        color: #fff;
        padding: 0.5rem 1rem;
        border-radius: 4px;
        text-decoration: none;
        margin-bottom: 1rem;
        display: inline-block;
    }

    .btn:hover {
        background: #1565c0;
    }
</style>
@endpush