
@extends('layout')

@section('title', 'Katalog Game')

@section('content')
<section class="page-header">
    <p class="eyebrow">EXPLORE YOUR NEXT GAME</p>
    <h1>Katalog Game</h1>
    <p>Temukan game berdasarkan genre dan platform favoritmu.</p>
</section>

<section class="catalog">
    <div class="game-grid">
        @foreach ($games as $game)
            <article class="game-card">
                <a href="{{ route('games.show', $game['slug']) }}">
                    <img
                        src="{{ $game['gambar'] }}"
                        alt="{{ $game['nama'] }}"
                        class="game-image"
                    >
                </a>

                <div class="game-info">
                    <span class="tag">{{ $game['genre'] }}</span>
                    <h2>{{ $game['nama'] }}</h2>
                    <p>
                        {{ $game['tahun'] }} · {{ $game['platform'] }}
                    </p>
                    <a
                        href="{{ route('games.show', $game['slug']) }}"
                        class="detail-link"
                    >
                        Lihat Detail →
                    </a>
                </div>
            </article>
        @endforeach
    </div>
</section>
@endsection
