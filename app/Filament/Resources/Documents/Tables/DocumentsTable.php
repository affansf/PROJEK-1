<?php

namespace App\Filament\Resources\Documents\Tables;

use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Storage;

class DocumentsTable
{
    public static function configure(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('title')
                ->searchable()
                ->sortable(),

            Tables\Columns\TextColumn::make('category')
                ->sortable(),

            Tables\Columns\TextColumn::make('file_path')
                ->label('File')
                ->url(fn ($record) => Storage::url($record->file_path))
                ->openUrlInNewTab(),
        ]);
    }
}
