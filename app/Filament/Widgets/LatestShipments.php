<?php

namespace App\Filament\Widgets;

use App\Models\Shipment;
use Closure;
use Filament\Tables;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;

class LatestShipments extends BaseWidget
{
    protected static ?int $sort = 4;

    protected int|string|array $columnSpan = [
        'sm' => 2,
        'xl' => 1,
    ];

    protected function getTableQuery(): Builder
    {
        return Shipment::query()->latest();
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('id')
                ->label('Shipment ID'), // Change the label to 'Shipment ID'
            Tables\Columns\TextColumn::make('order.id')
                ->label('Order Number'), // Assuming 'order' is the relationship to the order
            Tables\Columns\TextColumn::make('country')
                ->label('Country'),
        ];
    }
}
