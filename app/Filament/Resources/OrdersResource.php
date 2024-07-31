<?php

namespace App\Filament\Resources;

use App\Filament\Exports\OrderExporter;
use App\Filament\Resources\OrdersResource\Pages;
use App\Filament\Resources\OrdersResource\RelationManagers;
use App\Models\Order;
use App\Models\Orders;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\ExportAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OrdersResource extends Resource
{
    protected static ?string $model = Order::class;

    protected static ?string $navigationIcon = 'heroicon-o-cube-transparent';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                ->label('User ID/Name')
                    ->searchable()
                ->sortable(),
                Tables\Columns\TextColumn::make('balance')
                ->label('Balance')
                ->money('usd'),
                Tables\Columns\TextColumn::make('phone_number')
                ->label('Phone')
                ->sortable(),
                Tables\Columns\TextColumn::make('country')
                ->label('Country')
                ->sortable(),
                Tables\Columns\TextColumn::make('postcode')
                ->label('Postcode'),
                TextColumn::make('state')
                ->label('State'),
                TextColumn::make('created_at')
                ->label('Date')
                ->date('M,d Y')
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('user')
                ->relationship('user', 'name')
                ->searchable()
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                ->label(''),
                Tables\Actions\DeleteAction::make()
                ->label('')
            ])
//            ->headerActions([
//                    ExportAction::make()
//                        ->exporter(OrderExporter::class)
//                ]
//            )
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListOrders::route('/'),
            'create' => Pages\CreateOrders::route('/create'),
            'edit' => Pages\EditOrders::route('/{record}/edit'),
        ];
    }
}
