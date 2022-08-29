<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OKendaraanController extends Controller
{
    public function kendaraan()
    {
        $kendaraan = Order::all();
        return view('admin.data.order.kendaraan');
    }
}
