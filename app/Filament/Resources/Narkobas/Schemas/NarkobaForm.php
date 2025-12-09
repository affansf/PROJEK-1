<?php

namespace App\Filament\Resources\Narkobas\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;

class NarkobaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->schema([
            TextInput::make('judul')
                ->label('Judul Artikel')
                ->required()
                ->maxLength(255),

            Textarea::make('isi')
                ->label('Isi Artikel')
                ->rows(7)
                ->required(),

            FileUpload::make('gambar')
                ->label('Gambar (JPG/PNG)')
                ->directory('narkoba_images')
                ->image()
                ->imagePreviewHeight('150')
                ->acceptedFileTypes(['image/jpeg', 'image/png'])
                ->nullable(),
        ]);
    }
}
