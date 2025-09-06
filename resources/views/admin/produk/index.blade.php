@extends('layouts.app')
@section('title', 'Kelola Produk')

@section('content')
<div class="produk-list">
    <h1>Kelola Produk</h1>
    <a href="{{ route('admin.produk.create') }}" class="btn">Tambah Produk</a>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Jenis Produk</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Gambar</th>
                <th>Created At</th>
                <th>Updated At</th>
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
                <td>
                    @if($item->gambar)
                    <img src="/storage/{{ $item->gambar }}" width="60">
                    @endif
                </td>
                <td>{{ $item->created_at?->format('d-m-Y H:i') ?? '-' }}</td>
                <td>{{ $item->updated_at?->format('d-m-Y H:i') ?? '-' }}</td>
                <td>
                    <a href="{{ route('admin.produk.edit', $item->id) }}" class="btn" style="padding: 0.3rem 0.6rem; font-size: 0.9rem;">Edit</a>
                    <button type="button" class="btn-hapus" data-id="{{ $item->id }}">Hapus</button>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="8">Belum ada produk.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

<!-- Modal Konfirmasi -->
<div id="confirm-modal" class="modal-backdrop" style="display: none;">
    <div class="modal-box">
        <p>Yakin ingin menghapus data ini?</p>
        <div style="margin-top: 2rem; display:flex; justify-content: center; gap: 0.5rem;">
            <button id="cancel-delete" class="btn-secondary">Tidak</button>
            <form id="delete-form" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn">Ya</button>
            </form>
        </div>
    </div>
</div>



{{-- Tambahan JS --}}
<script>
document.addEventListener('DOMContentLoaded', () => {
    const modal = document.getElementById('confirm-modal');
    const deleteForm = document.getElementById('delete-form');
    const cancelBtn = document.getElementById('cancel-delete');

    document.querySelectorAll('.btn-hapus').forEach(btn => {
        btn.addEventListener('click', () => {
            const id = btn.dataset.id;
            deleteForm.action = `/admin/produk/${id}`;
            modal.style.display = 'flex';
            modal.classList.remove('fade-out');
            modal.querySelector('.modal-box').classList.remove('fade-out');
        });
    });

    cancelBtn.addEventListener('click', () => {
        modal.classList.add('fade-out');
        modal.querySelector('.modal-box').classList.add('fade-out');

        setTimeout(() => {
            modal.style.display = 'none';
            modal.classList.remove('fade-out');
            modal.querySelector('.modal-box').classList.remove('fade-out');
        }, 200);
    });

    modal.addEventListener('click', e => {
        if (e.target === modal) cancelBtn.click();
    });
});
</script>
@endsection
