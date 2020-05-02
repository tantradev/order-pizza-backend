<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\OrderItems;
class OrderItemsController extends Controller
{
    public function store(Request $request)
    {
        $myItems = [$request];
        DB::table("order_items")->insert($request->get('bodyItems'));
        
    }

     public function findOne(Request $request)
    {
        $orderItems = OrderItems::where('orderId', $request->route('id'))->get();
        return response()->json($orderItems);
    }
}
