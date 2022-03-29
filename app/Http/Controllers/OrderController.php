<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function orderlist(){
     $orders=Order::all();
     
     return view('backend.pages.order',compact('orders'));


    }
}
