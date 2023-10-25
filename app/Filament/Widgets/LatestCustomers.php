<?php

namespace App\Filament\Widgets;

use App\Models\Customer;
use Closure;
use Filament\Tables;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;

class LatestCustomers extends BaseWidget
{
    protected static ?int $sort = 5;

    protected int|string|array $columnSpan = [
        'sm' => 2,
        'xl' => 1,
    ];

    protected function getTableQuery(): Builder
    {
        return Customer::query()->latest();
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('id')
                ->label('Customer ID'), // Change the label to 'Customer ID'
            Tables\Columns\TextColumn::make('first_name')
                ->label('First Name'),
            Tables\Columns\TextColumn::make('last_name')
                ->label('Last Name'),
        ];
    }
}
