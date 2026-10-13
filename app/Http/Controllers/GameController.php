<?php

namespace App\Http\Controllers;

class GameController extends Controller
{
    private function games()
    {
        return [
            [
                'slug' => 'gta-v',
                'nama' => 'Grand Theft Auto V',
                'genre' => 'Action, Open World',
                'platform' => 'PC, PlayStation, Xbox',
                'tahun' => 2013,
                'deskripsi' => 'Game open world yang memungkinkan pemain menjelajahi kota Los Santos, menjalankan misi, dan menikmati berbagai aktivitas.',
                'gambar' => 'https://cdn.akamai.steamstatic.com/steam/apps/271590/header.jpg',
            ],
            [
                'slug' => 'dota-2',
                'nama' => 'Dota 2',
                'genre' => 'MOBA',
                'platform' => 'PC',
                'tahun' => 2013,
                'deskripsi' => 'Game strategi tim yang mempertemukan dua tim untuk bertarung menggunakan berbagai hero dengan kemampuan unik.',
                'gambar' => 'https://cdn.akamai.steamstatic.com/steam/apps/570/header.jpg',
            ],
            [
                'slug' => 'the-witcher-3',
                'nama' => 'The Witcher 3: Wild Hunt',
                'genre' => 'RPG, Open World',
                'platform' => 'PC, PlayStation, Xbox, Switch',
                'tahun' => 2015,
                'deskripsi' => 'Game RPG tentang Geralt of Rivia yang menjelajahi dunia fantasi dan menjalankan berbagai misi.',
                'gambar' => 'https://cdn.akamai.steamstatic.com/steam/apps/292030/header.jpg',
            ],
            [
                'slug' => 'cyberpunk-2077',
                'nama' => 'Cyberpunk 2077',
                'genre' => 'RPG, Action',
                'platform' => 'PC, PlayStation, Xbox',
                'tahun' => 2020,
                'deskripsi' => 'Game RPG berlatar kota futuristik Night City dengan cerita, misi, dan pilihan yang memengaruhi perjalanan pemain.',
                'gambar' => 'https://cdn.akamai.steamstatic.com/steam/apps/1091500/header.jpg',
            ],
            [
                'slug' => 'elden-ring',
                'nama' => 'Elden Ring',
                'genre' => 'Action RPG',
                'platform' => 'PC, PlayStation, Xbox',
                'tahun' => 2022,
                'deskripsi' => 'Game action RPG dengan dunia fantasi luas, pertarungan menantang, eksplorasi, dan berbagai jenis musuh.',
                'gambar' => 'https://cdn.akamai.steamstatic.com/steam/apps/1245620/header.jpg',
            ],
            [
                'slug' => 'stardew-valley',
                'nama' => 'Stardew Valley',
                'genre' => 'Simulation, RPG',
                'platform' => 'PC, PlayStation, Xbox, Switch, Mobile',
                'tahun' => 2016,
                'deskripsi' => 'Game simulasi kehidupan yang mengajak pemain mengelola kebun, beternak, memancing, dan berinteraksi dengan warga.',
                'gambar' => 'https://cdn.akamai.steamstatic.com/steam/apps/413150/header.jpg',
            ],
        ];
    }

    public function index()
    {
        return view('games.index', [
            'games' => $this->games()
        ]);
    }

    public function show($slug)
    {
        $game = collect($this->games())
            ->firstWhere('slug', $slug);

        abort_if(!$game, 404);

        return view('games.show', [
            'game' => $game
        ]);
    }
}
