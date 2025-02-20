<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function index()
    {
        $data['orders'] = Order::orderBy('created_at', 'desc')->get();
        return view('pages.admin.order.index', $data);
    }

    public function edit($id)
    {
        $data['order'] = Order::findOrFail($id);
        return view('pages.admin.order.view', $data);
    }
}
