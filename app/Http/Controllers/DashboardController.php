<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $userId = Auth::id();

        $accountBalance = DB::table('accounts')
            ->where('user_id', $userId)
            ->sum('current_balance');

        $totalIncome = DB::table('transactions')
            ->where('user_id', $userId)
            ->where('type', 'income')
            ->sum('amount');

        $totalExpense = DB::table('transactions')
            ->where('user_id', $userId)
            ->where('type', 'expense')
            ->sum('amount');

        $totalSavingsTarget = DB::table('savings_goals')
            ->where('user_id', $userId)
            ->sum('target_amount');

        $totalForexProfit = DB::table('forex_trades')
            ->where('user_id', $userId)
            ->sum('profit_loss');

        return view('dashboard', compact(
            'accountBalance',
            'totalIncome',
            'totalExpense',
            'totalSavingsTarget',
            'totalForexProfit'
        ));
    }
}
