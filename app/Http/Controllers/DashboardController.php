<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $customers = DB::table('users')
            ->select(DB::raw('YEAR(created_at) as year, MONTH(created_at) as month, COUNT(*) as total'))
            ->where('role_id', '4')
            ->groupBy(DB::raw('YEAR(created_at), MONTH(created_at)'))
            ->get();
        // dd($customers);

        $sales = DB::table('product_types as pt')
            // ->join('orders as o', 'pt.id')
            ->select(DB::raw('YEAR(created_at) as year, MONTH(created_at) as month, SUM(sold) as total'))
            ->groupBy(DB::raw('YEAR(created_at), MONTH(created_at)'))
            ->get();
        // dd($sales);

        return view('admin.index', compact('customers', 'sales'));
    }
}
