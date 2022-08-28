<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OBangunanController extends Controller
{
    public function bangunan()
    {
        $bangunan = Order::all();
        return view('admin.data.order.kendaraan');
    }
}
