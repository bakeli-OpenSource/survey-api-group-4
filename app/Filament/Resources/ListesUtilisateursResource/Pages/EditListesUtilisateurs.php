<?php

namespace App\Filament\Resources\ListesUtilisateursResource\Pages;

use App\Filament\Resources\ListesUtilisateursResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditListesUtilisateurs extends EditRecord
{
    protected static string $resource = ListesUtilisateursResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
