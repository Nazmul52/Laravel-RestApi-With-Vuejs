<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class OrderController extends Controller
{
    
    public function todayOrder(){

    	  $data = date('d/m/yy');
    	  
     	$orders = DB::table('orders')->join('customers', 'orders.customer_id','customers.id')->where('order_date', $data)->select('customers.name', 'orders.*')->orderBy('orders.id', 'DESC')->get();
    

    	return response()->json($orders);
    } 

    public function viewOrder($id){
    	$orders = DB::table('orders')->join('customers', 'orders.customer_id','customers.id')->where('orders.id', $id)->select('customers.name', 'customers.phone', 'customers.address', 'orders.*')->get();


    	$order_details = DB::table('order_details')->join('products', 'order_details.product_id', 'products.id')->where('order_details.order_id', $id)->select( 'order_details.*', 'products.product_name', 'products.product_code', 'products.image')->get();

    	$data = array(
    		'order' => $orders,
    		'order_details' => $order_details
    	);
    	// return $orders;

    	return response()->json($data);

    }
}
