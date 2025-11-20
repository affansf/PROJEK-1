<?php

namespace App\Filament\Resources\Narkobas\Pages;

use App\Filament\Resources\Narkobas\NarkobaResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditNarkoba extends EditRecord
{
    protected static string $resource = NarkobaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
