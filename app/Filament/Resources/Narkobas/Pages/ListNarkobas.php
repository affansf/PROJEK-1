<?php

namespace App\Filament\Resources\Narkobas\Pages;

use App\Filament\Resources\Narkobas\NarkobaResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListNarkobas extends ListRecords
{
    protected static string $resource = NarkobaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
