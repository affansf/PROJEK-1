<?php

namespace App\Filament\Resources\Laporans\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Schemas\Schema;

class LaporanInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('nama_pengguna'),
                TextEntry::make('nomor_handphone'),
                TextEntry::make('jenis_laporan'),
                TextEntry::make('lokasi'),
                TextEntry::make('foto_bukti'),
                IconEntry::make('anonim')
                    ->boolean(),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
