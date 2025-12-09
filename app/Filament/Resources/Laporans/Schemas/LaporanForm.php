<?php

namespace App\Filament\Resources\Laporans\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class LaporanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_pengguna')
                    ->required(),
                TextInput::make('nomor_handphone')
                    ->tel()
                    ->required(),
                Textarea::make('alamat_rumah')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('jenis_laporan')
                    ->required(),
                TextInput::make('lokasi')
                    ->required(),
                Textarea::make('rincian')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('foto_bukti')
                    ->default(null),
                Toggle::make('anonim')
                    ->required(),
            ]);
    }
}
