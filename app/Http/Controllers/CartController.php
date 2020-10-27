<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use DB;
class CartController extends Controller
{
    public function addToCart(Request $request, $id){
    	$product = Product::where('id', $id)->first();

    	$data = array();

    	$data['pro_id'] =  $id;
    	$data['pro_name'] = $product->product_name;
    	$data['pro_quantity'] = 1;
    	$data['product_price'] = $product->selling_price;
    	$data['sub_total'] = $product->selling_price;
    	$data['created_at'] = date("Y-m-d h:i:s");
    	$data['updated_at'] =  date("Y-m-d h:i:s");

    	$result = DB::table('pos')->insert($data);

    	 return response()->json([
            'message' => 'Successfully add to cart',
            'cartproduct' => $data
        ], 201);
    }

    public function cartProduct(){
        $cart = DB::table('pos')->get();
        return response()->json($cart);
    }

    public function removeCart($id){
        $carItem = DB::table('pos')->delete($id);

        return response()->json([
            'message' => 'Successfully remove from cart',
            
        ], 201);
    }
}
