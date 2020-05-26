<?php

namespace App\Http\Controllers;

use App\Driver;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class PanelController extends Controller
{
    public function index()
    {
        $drivers = Driver::get();
        $orders = DB::table('orders')
        ->whereMonth('orders.created_at', '=', Carbon::today()->month)
        ->select('*')
        ->get();

        return view('panel', ['drivers' => $drivers, 'orders' => $orders]);
    }
}
