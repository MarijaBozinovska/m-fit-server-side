<?php

namespace App\Filament\Widgets;

use App\Models\Payment;
use Closure;
use Filament\Tables;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;

class LatestPayments extends BaseWidget
{
    protected static ?int $sort = 3;

    protected int|string|array $columnSpan = [
        'sm' => 2,
        'xl' => 1,
    ];

    protected function getTableQuery(): Builder
    {
        return Payment::query()->latest();
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('id')
                ->label('Payment ID'),
            Tables\Columns\TextColumn::make('order.id')
                ->label('Order number'),
            Tables\Columns\TextColumn::make('amount')
                ->label('Amount'), // Assuming 'amount' is the payment amount
        ];
    }
}
