<?php

namespace App\Filament\Resources\Laporans\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
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
                FileUpload::make('foto_bukti')
                    ->disk('public') // Pastikan disk public
                    ->directory('bukti-laporan')
                    ->image()
                    ->imageEditor()
                    ->downloadable()
                    ->openable()
                    ->columnSpanFull()
                    ->label('Bukti Foto TKP'),

                // BAGIAN PENTING: Untuk Status Tindak Lanjut
                Select::make('status')
                    ->options([
                        'Menunggu' => 'Menunggu',
                        'Sedang Diproses' => 'Sedang Diproses',
                        'Selesai' => 'Selesai / Ditindaklanjuti',
                    ])
                    ->default('Menunggu')
                    ->required()
                    ->label('Status Penanganan'),
                Toggle::make('anonim')
                    ->required(),
            ]);
    }
}
