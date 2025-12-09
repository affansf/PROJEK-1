<?php

namespace App\Filament\Resources\Narkobas\Pages;

use App\Filament\Resources\Narkobas\NarkobaResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewNarkoba extends ViewRecord
{
    protected static string $resource = NarkobaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
