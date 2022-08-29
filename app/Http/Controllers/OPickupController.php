<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OPickupController extends Controller
{
    public function pickup()
    {
        $pickup = Order::all();
        return view('admin.data.order.kendaraan');
    }
}
