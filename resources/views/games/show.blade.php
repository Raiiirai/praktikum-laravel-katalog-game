
@extends('layout')

@section('title', $game['nama'])

@section('content')
<section class="detail-container">
    <a href="{{ route('games.index') }}" class="back-link">
        ← Kembali ke Katalog
    </a>

    <div class="detail-card">
        <img
            src="{{ $game['gambar'] }}"
            alt="{{ $game['nama'] }}"
            class="detail-image"
        >

        <div class="detail-info">
            <span class="tag">{{ $game['genre'] }}</span>
            <h1>{{ $game['nama'] }}</h1>

            <p>
                <strong>Tahun Rilis:</strong>
                {{ $game['tahun'] }}
            </p>

            <p>
                <strong>Platform:</strong>
                {{ $game['platform'] }}
            </p>

            <h2>Tentang Game</h2>
            <p>{{ $game['deskripsi'] }}</p>

            <a href="{{ route('games.index') }}" class="btn">
                Kembali ke Daftar Game
            </a>
        </div>
    </div>
</section>
@endsection
