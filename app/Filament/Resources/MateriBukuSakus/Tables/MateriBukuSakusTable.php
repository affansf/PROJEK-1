<?php
use App\Models\MateriBukuSaku;
use Filament\Actions\ActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class MateriBukuSakusTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('urutan')
                    ->label('Urutan')
                    ->sortable()
                    ->width(50),

                TextColumn::make('judul')
                    ->searchable()
                    ->sortable()
                    ->description(fn (MateriBukuSaku $record): ?string => $record->deskripsi)
                    ->wrap()
                    ->weight('bold'),

                TextColumn::make('kategori')
                    ->sortable()
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Buku Saku' => 'warning',
                        'Dasar Hukum & Regulasi' => 'danger',
                        default => 'info',
                    })
                    ->width(150),

               IconColumn::make('file_path')
                    ->label('File')
                    ->icon('heroicon-o-document-text')
                    ->url(
                        fn (MateriBukuSaku $record): ?string =>
                            $record->file_path
                                ? route('bukusaku.file', $record)
                                : null,
                        true, // buka di tab baru
                    )
                    ->tooltip('Klik untuk pratinjau / unduh')
                    ->alignCenter()
                    ->width(80),

                TextColumn::make('created_at')
                    ->dateTime()
                    ->label('Dibuat')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('kategori')
                    ->options([
                        'Buku Saku' => 'Buku Saku',
                        'Dasar Hukum & Regulasi' => 'Dasar Hukum & Regulasi',
                        'Lainnya' => 'Lainnya',
                    ]),
            ])
            ->recordActions([
                ActionGroup::make([
                    EditAction::make(),
                    DeleteAction::make(),
                ]),
            ])
            ->defaultSort('urutan', 'asc');
    }
}