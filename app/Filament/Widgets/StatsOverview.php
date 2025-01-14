<?php

namespace App\Filament\Widgets;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Carbon\Carbon; //setting tentang waktu 
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Transaction;
class StatsOverview extends BaseWidget
{
    use InteractsWithPageFilters;
    protected function getStats(): array
    {
        $startDate = ! is_null($this->filters['startDate'] ?? null) ?
            Carbon::parse($this->filters['startDate']) :
            null;

        $endDate = ! is_null($this->filters['endDate'] ?? null) ?
            Carbon::parse($this->filters['endDate']) :
            now();
        $pemasukan = Transaction::incomes()
                        ->whereBetween('date_transaction', [$startDate, $endDate])
                        ->sum('amount');

        $pengeluaran = Transaction::expenses()
                        ->whereBetween('date_transaction', [$startDate, $endDate])
                        ->sum('amount');
                        
        // $pemasukan = Transaction::join('categories', 'transactions.category_id', '=', 'categories.id')
        //     ->where('categories.is_expense', false)
        //     ->sum('amount');

        return [
            Stat::make('Total Pemasukan', $pemasukan),
            Stat::make('Total Pengeluaran', $pengeluaran),
            Stat::make('Selisih', $pemasukan - $pengeluaran),
        ];

    }
}
