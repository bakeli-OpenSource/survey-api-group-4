<?php

namespace App\Filament\Resources\ListesUtilisateursResource\Pages;

use App\Filament\Resources\ListesUtilisateursResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListListesUtilisateurs extends ListRecords
{
    protected static string $resource = ListesUtilisateursResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
