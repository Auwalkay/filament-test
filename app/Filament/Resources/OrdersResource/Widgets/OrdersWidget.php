<?php

namespace App\Filament\Resources\OrdersResource\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class OrdersWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Revenue',number_format(2909))
            ->icon('heroicon-o-chart-bar')
            ->color('primary'),
            Stat::make('Total Order',number_format(400))
            ->icon('heroicon-o-arrow-trending-up'),
            Stat::make('No of Modem',number_format(520))
            ->icon('heroicon-o-circle-stack'),
            Stat::make('No of User',number_format(320))
            ->icon('heroicon-o-wifi'),
        ];
    }
}
