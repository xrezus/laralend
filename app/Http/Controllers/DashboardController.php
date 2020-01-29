<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $orders = Order::all();

        return view('dashboard.index', compact('orders'));
    }

    public function calendar(){
        return view('dashboard.calendar');
    }

}
