<?php

namespace App\Filament\Resources\AdminResource\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class SondageTypeOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            // Stat::make('Sondages', SondageTypeOverview::query()->where('type', 'Sondages')->count()),
            // Stat::make('Sondages', SondageTypeOverview::query()->where('type', 'Sondages')->count()),
            // Stat::make('Sondages', SondageTypeOverview::query()->where('type', 'Sondages')->count()),
        ];
    }
}
