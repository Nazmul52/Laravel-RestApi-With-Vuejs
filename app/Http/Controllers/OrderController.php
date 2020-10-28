<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class OrderController extends Controller
{
    
    public function todayOrder(){
    	$date = date('d/m/y');
    	$orders = DB::table('orders')->join('customers', 'orders.customer_id','customers.id')->where('order_date', $date)->select('customers.name', 'orders.*')->orderBy('orders.id', 'DESC')->get();

    	return response()->json($orders);
    } 
}
