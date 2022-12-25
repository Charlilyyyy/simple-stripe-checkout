<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\OrderData;

class OrderDataController extends Controller
{
    public function store(Request $request){
        $order_data = new OrderData;
        $order_data->name = $request->name;
        $order_data->age = $request->age;
        $order_data->phone = $request->phone;
        $order_data->order = $request->order;
        $order_data->save();

        return view('confirmorder',compact('order_data'));
    }
}
