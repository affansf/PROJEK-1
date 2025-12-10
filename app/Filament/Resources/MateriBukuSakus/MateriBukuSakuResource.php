<?php

namespace App\Filament\Resources\MateriBukuSakus;

use App\Filament\Resources\MateriBukuSakus\Pages\CreateMateriBukuSaku;
use App\Filament\Resources\MateriBukuSakus\Pages\EditMateriBukuSaku;
use App\Filament\Resources\MateriBukuSakus\Pages\ListMateriBukuSakus;
use App\Filament\Resources\MateriBukuSakus\Schemas\MateriBukuSakuForm;
use App\Filament\Resources\MateriBukuSakus\tables\MateriBukuSakusTable;
use App\Models\MateriBukuSaku;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use MateriBukuSakusTable as GlobalMateriBukuSakusTable;

class MateriBukuSakuResource extends Resource
{
    protected static ?string $model = MateriBukuSaku::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'judul';
    
    public static function form(Schema $schema): Schema
    {
        return MateriBukuSakuForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return GlobalMateriBukuSakusTable::configure($table);
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
            'index' => ListMateriBukuSakus::route('/'),
            'create' => CreateMateriBukuSaku::route('/create'),
            'edit' => EditMateriBukuSaku::route('/{record}/edit'),
        ];
    }
}