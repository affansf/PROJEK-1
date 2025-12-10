<?php

namespace App\Filament\Resources\Laporans\Tables;

use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Storage;

class LaporansTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_pengguna')
                    ->searchable()
                    ->limit(20)
                    ->label('Pelapor'),

                TextColumn::make('nomor_handphone')
                    ->searchable()
                    ->label('No. HP'),

                TextColumn::make('jenis_laporan')
                    ->searchable()
                    ->badge(),

                TextColumn::make('lokasi')
                    ->searchable()
                    ->limit(20),

                IconColumn::make('anonim')
                    ->boolean(),

                TextColumn::make('created_at')
                    ->dateTime('d M Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultPaginationPageOption(10)
            ->filters([
                //
            ])
            ->recordActions([
                // --- TOMBOL DOWNLOAD ---
                Action::make('unduh_bukti')
                    ->label('Unduh Foto')
                    ->icon('heroicon-o-arrow-down-tray')
                    ->color('success')
                    ->visible(fn ($record): bool => ! empty($record->foto_bukti))
                    ->action(function ($record) {
                        // Path relatif di disk 'public', contoh: 'laporan/foto.jpg'
                        $relativePath = $record->foto_bukti;

                        // Pastikan file ada di disk public
                        if (! Storage::disk('public')->exists($relativePath)) {
                            // Bisa juga ditambah notification kalau mau
                            return;
                        }

                        // Ambil full path fisik
                        $fullPath = Storage::disk('public')->path($relativePath);

                        // Return response download (ini yang Filament akan teruskan ke browser)
                        return response()->download($fullPath);
                    }),
                // -----------------------

                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}