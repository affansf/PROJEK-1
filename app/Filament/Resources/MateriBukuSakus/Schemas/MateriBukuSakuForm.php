<?php

namespace App\Filament\Resources\MateriBukuSakus\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Group;
use Filament\Schemas\Schema;

class MateriBukuSakuForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                // Grup kiri: kategori, judul, deskripsi
                Group::make()
                    ->schema([
                        Select::make('kategori')
                            ->options([
                                'Buku Saku' => 'Buku Saku',
                                'Dasar Hukum & Regulasi' => 'Dasar Hukum & Regulasi',
                                'Lainnya' => 'Lainnya',
                            ])
                            ->required()
                            ->default('Dasar Hukum & Regulasi')
                            ->placeholder('Pilih Kategori Materi')
                            ->columnSpan('full'),

                        TextInput::make('judul')
                            ->required()
                            ->maxLength(255)
                            ->columnSpan('full'),

                        TextInput::make('deskripsi')
                            ->maxLength(255)
                            ->nullable()
                            ->label('Deskripsi Singkat (Sub-Judul)')
                            ->columnSpan('full'),
                    ])
                    ->columns(1)
                    ->columnSpan(['lg' => 2]),

                // Grup kanan: urutan & upload file
                Group::make()
                    ->schema([
                        TextInput::make('urutan')
                            ->numeric()
                            ->default(0)
                            ->helperText('Angka lebih kecil akan tampil lebih atas.')
                            ->columnSpan('full'),
                        
                        FileUpload::make('file_path')
                            ->label('File PDF')
                            ->required()
                            ->disk('public')
                            ->directory('materi_pdf')
                            ->acceptedFileTypes(['application/pdf'])
                            ->maxSize(10240) // 10MB
                            ->visibility('public') // boleh ditambah, tapi untuk route ini nggak wajib
                            ->columnSpan('full'),
                    ])
                    ->columns(1)
                    ->columnSpan(['lg' => 1]),
            ])
            ->columns(3);
    }
}