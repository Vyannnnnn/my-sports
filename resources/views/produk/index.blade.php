@extends('layouts.app')

@section('content')
<div id="detail-modal" class="modal-backdrop">
    <div class="modal-box">
        <button class="modal-close">&times;</button>
        <img id="modal-img" src="" alt="" />
        <h3 id="modal-nama"></h3>
        <p id="modal-harga"></p>
        <p id="modal-desc"></p>
    </div>
</div>

<div class="produk-list">
    <h1>Katalog Produk Olahraga</h1>
    <div class="produk-grid">
        @forelse($produk as $item)
        <div class="produk-card"
            data-nama="{{ $item->jenis_produk }}"
            data-harga="Rp{{ number_format($item->harga,0,',','.') }}"
            data-lokasi="{{ $item->lokasi ?? 'Jakarta' }}"
            data-rating="{{ $item->rating ?? 4.5 }}"
            data-img="{{ $item->gambar ? '/storage/'.$item->gambar : '' }}"
            data-deskripsi="{{ $item->deskripsi ?? 'Tidak ada deskripsi.' }}"
            >
            <div class="produk-img">
                @if($item->gambar)
                <img src="/storage/{{ $item->gambar }}" alt="{{ $item->jenis_produk }}">
                @else
                <div class="produk-img-placeholder">No Image</div>
                @endif
                <button class="detail-btn">Detail</button> {{-- tombol ditumpuk di atas gambar --}}
            </div>

            <div class="produk-info">
                <div class="produk-nama">{{ $item->jenis_produk }}</div>
                <div class="produk-harga">Rp{{ number_format($item->harga,0,',','.') }}</div>
                <div class="produk-lokasi">{{ $item->lokasi ?? 'Jakarta' }}</div>
                <div class="produk-rating">
                    @php
                    $rating = $item->rating ?? 4.5;
                    $fullStars = floor($rating);
                    $halfStar = ($rating - $fullStars) >= 0.5;
                    $emptyStars = 5 - $fullStars - ($halfStar ? 1 : 0);
                    @endphp

                    <div class="produk-rating">
                        @for($i = 0; $i < $fullStars; $i++)
                            <span class="star">&#9733;</span>
                            @endfor

                            @if($halfStar)
                            <span class="star">&#9733;</span><span class="half-star" style="margin-left: -1em;">&#9734;</span>
                            @endif

                            @for($i = 0; $i < $emptyStars; $i++)
                                <span class="star">&#9734;</span>
                                @endfor

                                <span style="margin-left: 6px;">{{ $rating }}</span>
                    </div>

                </div>
            </div>
        </div>
        @empty
        <div style="grid-column: 1/-1; text-align:center;">Belum ada produk.</div>
        @endforelse
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const modal = document.getElementById('detail-modal');
        const closeBtn = modal.querySelector('.modal-close');

        document.querySelectorAll('.detail-btn').forEach(btn => {
            btn.addEventListener('click', e => {
                const card = e.currentTarget.closest('.produk-card');
                // isi modal
                modal.querySelector('#modal-nama').textContent = card.dataset.nama;
                modal.querySelector('#modal-harga').textContent = card.dataset.harga;
                  modal.querySelector('#modal-desc').textContent = 'Deskripsi: '+card.dataset.deskripsi;
                //   modal.querySelector('#modal-rating').textContent = 'Rating: '+card.dataset.rating;
                const imgTag = modal.querySelector('#modal-img');
                if (card.dataset.img) {
                    imgTag.src = card.dataset.img;
                    imgTag.style.display = 'block';
                } else {
                    imgTag.style.display = 'none';
                }

                modal.style.display = 'flex';
            });
        });

        // Tutup modal
        closeBtn.addEventListener('click', () => modal.style.display = 'none');
        modal.addEventListener('click', e => {
            if (e.target === modal) modal.style.display = 'none';
        });
    });
</script>
@endsection