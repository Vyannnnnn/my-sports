@extends('layouts.app')

@section('content')
<div class="produk-list">
    <h1>Katalog Produk Olahraga</h1>
    <div class="produk-grid">
        @forelse($produk as $item)
        <div class="produk-card">
            <div class="produk-img">
                @if($item->gambar)
                <img src="/uploads/{{ $item->gambar }}" alt="{{ $item->jenis_produk }}">
                @else
                <div class="produk-img-placeholder">No Image</div>
                @endif
            </div>
            <div class="produk-info">
                <div class="produk-nama">{{ $item->jenis_produk }}</div>
                <div class="produk-harga">Rp{{ number_format($item->harga,0,',','.') }}</div>
                <div class="produk-lokasi">{{ $item->lokasi ?? 'Jakarta' }}</div>
                <div class="produk-rating">
                    @php $rating = $item->rating ?? 4.5; @endphp
                    <span class="star">&#9733;</span> {{ $rating }}
                </div>
            </div>
        </div>
        @empty
        <div style="grid-column: 1/-1; text-align:center;">Belum ada produk.</div>
        @endforelse
    </div>
</div>
@endsection