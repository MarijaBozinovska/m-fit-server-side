<?php

namespace App\Filament\Widgets;

use App\Models\Order;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class NumberOfOrdersToday extends BaseWidget
{
    protected static ?int $sort = 1;

    protected int|string|array $columnSpan = [
        'sm' => 2,
        'xl' => 1,
    ];

    protected function getCards(): array
    {
        return [
            Card::make('Total number of orders', Order::query()->where('created_at', today())->count())
                ->description('Total number of orders all time')
                ->descriptionIcon('heroicon-s-trending-up')
                ->chart([1, 5, 2, 5, 10, 2])
                ->color('success'),
        ];
    }
}
