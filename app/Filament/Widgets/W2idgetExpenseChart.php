<?php

namespace App\Filament\Widgets;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Illuminate\Support\Carbon; //setting tentang waktu 
use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use App\Models\Transaction; 
class W2idgetExpenseChart extends ChartWidget
{
    use InteractsWithPageFilters;
    protected static ?string $heading = 'Pengeluaran Per Hari';
    protected static string $color = 'danger';

    protected function getData(): array
    {
        $startDate = ! is_null($this->filters['startDate'] ?? null) ?
            Carbon::parse($this->filters['startDate']) :
            now()->startOfMonth();

        $endDate = ! is_null($this->filters['endDate'] ?? null) ?
            Carbon::parse($this->filters['endDate']) :
            now()->startOfMonth();

        $data = Trend::query(Transaction::expenses())
            ->dateColumn('date_transaction') 
            ->between(
                start: $startDate,
                end: $endDate,
            )
            ->perDay()
            ->sum('amount');
    
        return [
            'datasets' => [
                [
                    'label' => 'Pengeluaran',
                    'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
                ],
            ],
            'labels' => $data->map(fn (TrendValue $value) => $value->date),
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
