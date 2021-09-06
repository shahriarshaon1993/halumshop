<?php

namespace App\Repositories;

use App\Interface\DashboardInterface;
use App\Models\Order;
use Illuminate\Support\Carbon;

class DashboardRepository implements DashboardInterface
{
    public function totalSales()
    {
        return Order::select('total', 'created_at')
            ->where('status', 3)
            ->sum('total');
    }

    public function todaysSales()
    {
        return Order::select('total', 'created_at')
            ->whereDate('created_at', date('Y-m-d'))
            ->where('status', 3)
            ->sum('total');
    }

    public function currentWeekSales()
    {
        return Order::select('total', 'created_at')
            ->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])
            ->where('status', 3)
            ->sum('total');
    }

    public function currentMonthSales()
    {
        return Order::select('total', 'created_at')
            ->whereMonth('created_at', date('m'))
            ->whereYear('created_at', date('Y'))
            ->where('status', 3)
            ->sum('total');
    }

    public function currentYearSales()
    {
        return Order::select('total', 'created_at')
            ->whereYear('created_at', date('Y'))
            ->where('status', 3)
            ->sum('total');
    }
}
