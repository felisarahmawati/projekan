<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OBarangController extends Controller
{
    public function barang()
    {
        $barang = Order::all();
        return view('admin.data.order.barang');
    }
}
