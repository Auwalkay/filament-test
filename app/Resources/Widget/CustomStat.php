<?php

namespace App\Resources\Widget;

use Filament\Widgets\StatsOverviewWidget\Stat;


class CustomStat extends Stat
{
    protected string $iconBgColor='';

    public function iconBgColor(string $color): static
    {
        $this->iconBgColor = $color;

        return $this;
    }

    public function getIconBgColor(): string
    {
        return $this->iconBgColor;
    }

    public function render(): \Illuminate\Contracts\View\View
    {
        return view('filament.orders.widgets.order-widget')->with([
            'stat' => $this,
        ]);
    }
}
