<?php

namespace App\Filament\Resources\MateriBukuSakus\Pages;

use App\Filament\Resources\MateriBukuSakus\MateriBukuSakuResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditMateriBukuSaku extends EditRecord
{
    protected static string $resource = MateriBukuSakuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
