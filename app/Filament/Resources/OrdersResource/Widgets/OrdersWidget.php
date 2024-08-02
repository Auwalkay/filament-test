<?php

namespace App\Filament\Resources\OrdersResource\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class OrdersWidget extends BaseWidget
{
    protected static string $view='filament.orders.widgets.orders-widget';

    public $data = [
        "Revenue" => [
            'label' => 'Revenue',
            'value' => "2,9090AB",
            'icon' => 'heroicon-o-map',
            'backgroundColor' => 'bg-red-500',
        ],
        "Total orders" => [
            'label' => 'Total Orders',
            'value' => 520,
            'icon' => 'heroicon-o-bolt',
            'backgroundColor' =>'bg-green-400',
        ],
        "No of Modems" => [
            'label' => 'Modems',
            'value' => 400,
            'icon' => 'heroicon-o-signal',
            'backgroundColor' => 'bg-amber-400',
        ],
        "No of Users" => [
            'label' => 'Users',
            'value' => 360,
            'icon' => 'heroicon-o-wifi',
            'backgroundColor' => 'bg-purple-800',
        ],
    ];
//    protected function getStats(): array
//    {
//
//
//        return [
//            Stat::make('Revenue',2909)
//            ->icon('heroicon-o-chart-bar')
//                ->description('5% since last week')
//                ->descriptionIcon('heroicon-o-arrow-up')
//            ->descriptionColor('primary'),
//            Stat::make('Total Order',400)
//                ->description('5% since last week')
//                ->descriptionIcon('heroicon-o-arrow-up')
//                ->descriptionColor('primary')
//            ->icon('heroicon-o-arrow-trending-up'),
//            Stat::make('No of Modem',number_format(520))
//                ->description('5% since last week')
//                ->descriptionIcon('heroicon-o-arrow-up')
//                ->descriptionColor('primary')
//            ->icon('heroicon-o-circle-stack'),
//            Stat::make('No of User',number_format(320))
//                ->description('5% since last week')
//                ->descriptionIcon('heroicon-o-arrow-up')
//                ->descriptionColor('primary')
//            ->icon('heroicon-o-wifi'),
//        ];
//    }


}
