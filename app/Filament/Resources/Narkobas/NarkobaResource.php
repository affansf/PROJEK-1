<?php

namespace App\Filament\Resources\Narkobas;

use App\Filament\Resources\Narkobas\Pages\CreateNarkoba;
use App\Filament\Resources\Narkobas\Pages\EditNarkoba;
use App\Filament\Resources\Narkobas\Pages\ListNarkobas;
use App\Filament\Resources\Narkobas\Schemas\NarkobaForm;
use App\Filament\Resources\Narkobas\Tables\NarkobasTable;
use App\Models\Narkoba;
// use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class NarkobaResource extends Resource
{
    protected static ?string $model = Narkoba::class;

    // protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'judul';

    public static function form(Schema $schema): Schema
    {
        return NarkobaForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return NarkobasTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListNarkobas::route('/'),
            'create' => CreateNarkoba::route('/create'),
            'edit' => EditNarkoba::route('/{record}/edit'),
        ];
    }
}
