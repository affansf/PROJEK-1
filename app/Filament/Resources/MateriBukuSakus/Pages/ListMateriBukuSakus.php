<?php

namespace App\Filament\Resources\MateriBukuSakus\Pages;

use App\Filament\Resources\MateriBukuSakus\MateriBukuSakuResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMateriBukuSakus extends ListRecords
{
    protected static string $resource = MateriBukuSakuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
