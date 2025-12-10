<?php

namespace App\Filament\Resources\Documents\Schemas;

use Filament\Forms;
use Filament\Schemas\Schema;

class DocumentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->schema([
            Forms\Components\TextInput::make('title')
                ->required()
                ->maxLength(255),

            Forms\Components\TextInput::make('category')
                ->required()
                ->default('Dasar Hukum'),

            Forms\Components\TextInput::make('description')
                ->nullable()
                ->maxLength(255)
                ->columnSpan(2),

            Forms\Components\FileUpload::make('file_path')
                ->directory('files')
                ->disk('public')
                ->visibility('public')
                ->acceptedFileTypes(['application/pdf'])
                ->maxSize(20000)
        ]);
    }
}
