<?php

namespace App\Filament\Resources\Artikels\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms;
use Illuminate\Support\Str;

class ArtikelForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Forms\Components\TextInput::make('title')
                    ->label('Judul')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(function ($state, callable $set, $get) {
                        // Hanya set slug jika field slug masih kosong (mis. saat create)
                        if (! $get('slug')) {
                            $set('slug', Str::slug($state));
                        }
                    }),

                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->unique(ignoreRecord: true),

                Forms\Components\TextInput::make('subtitle')
                    ->label('Sub Judul'),

                Forms\Components\Select::make('category')
                    ->label('Kategori (Menu Dropdown)')
                    ->options([
                        'narkoba' => 'Narkoba',
                        'p4gn' => 'P4GN',
                        'rehabilitasi' => 'Rehabilitasi & Pemulihan',
                        'hukum' => 'Penegakan Hukum Narkotika',
                        'deteksidini' => 'Deteksi Dini & Tes Urine',
                        'peredaran' => 'Peredaran Gelap',
                        'peranmasyarakat' => 'Peran Masyarakat',
                        'pendidikan' => 'Pendidikan Anti-Narkoba',
                        'pelayanan' => 'Pelayanan Pascarehabilitasi',
                        'dukungan' => 'Dukungan Keluarga',
                    ])
                    ->required(),

                Forms\Components\FileUpload::make('image')
                    ->label('Gambar Utama')
                    ->image()
                    ->directory('artikel-images'),

                Forms\Components\RichEditor::make('content')
                    ->label('Deskripsi / Isi Artikel')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
