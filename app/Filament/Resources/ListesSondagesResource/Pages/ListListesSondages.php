<?php

namespace App\Filament\Resources\ListesSondagesResource\Pages;

use App\Filament\Resources\ListesSondagesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListListesSondages extends ListRecords
{
    protected static string $resource = ListesSondagesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
