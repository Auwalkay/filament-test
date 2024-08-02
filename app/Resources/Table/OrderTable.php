<?php

namespace App\Resources\Table;

use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table as BaseTable;

class OrderTable extends BaseTable
{

    protected string $view = 'filament.orders.tables.custom-table';
    public static function make(HasTable $livewire): static
    {
        $table = parent::make($livewire);

        // Set the custom view for the table
        $table->view('filament.orders.tables.custom-table');

        return $table;
    }

    public function render(): \Illuminate\Contracts\View\View
    {
        return view($this->view, [
            'records' => $this->getRecords(),
        ]);
    }
}
