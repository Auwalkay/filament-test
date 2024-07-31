<?php

namespace App\Filament\Resources\ProductResource\Widgets;

use App\Models\Order;
use App\Models\Product;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class ProductWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Products', Product::count()),
            Stat::make('Total Product Amount', number_format(Product::sum('amount'),2)),
            Stat::make('Available Products',number_format(Product::where('is_available', 1)->count()),)
        ];
    }
}
