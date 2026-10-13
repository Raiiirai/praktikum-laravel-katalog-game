
@extends('layout')

@section('title', 'Beranda')

@section('content')
<section class="hero">
    <div class="hero-content">
        <p class="eyebrow">YOUR GAMING DIRECTORY</p>
        <h1>Temukan Game Favoritmu.</h1>
        <p>
            Jelajahi berbagai game dari beragam genre dan platform.
            Temukan informasi game yang menarik untuk kamu mainkan.
        </p>
        <a href="{{ route('games.index') }}" class="btn">
            Jelajahi Katalog
        </a>
    </div>
</section>

<section class="intro">
    <h2>Selamat Datang di MAENIN</h2>
    <p>
        MAENIN adalah katalog game sederhana yang menyajikan
        informasi nama game, genre, platform, tahun rilis, dan deskripsi.
    </p>
</section>
@endsection
