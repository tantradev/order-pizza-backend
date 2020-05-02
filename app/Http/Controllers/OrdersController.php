<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Orders;
use DB;
class OrdersController extends Controller
{
    public function store(Request $request)
    {
        $order = new Orders();
        $order->clientId= $request->get('clientId');
        $order->total= $request->get('total');
        $order->save();
        return $order;
    }

    public function all()
    {
         $orders = Orders::with('client')->get();
        return response()->json($orders);
    }
}
