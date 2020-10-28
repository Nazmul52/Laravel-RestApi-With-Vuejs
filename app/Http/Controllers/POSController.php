<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use DB;
class POSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $products = Product::where('category_id', $id)->get();

        return response()->json($products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function orderComplete(Request $request){
        $validateData = $request->validate([
            'customer_id' => 'required',
            'pay_by' => 'required'
        ]);

        $data = array();

        $data['customer_id'] = $request->customer_id;
        $data['pay_by'] = $request->pay_by;
        $data['due'] = $request->due;
        $data['pay'] = $request->pay;
        $data['sub_total'] = $request->subtotal;
        $data['total'] = $request->total;
        $data['vat'] = $request->vat;
        $data['qty'] = $request->qty;

        $data['order_date'] = date('d/m/Y');
        $data['order_month'] = date('F');
        $data['order_year'] = date('Y');
        $data['created_at'] = date('d/m/y H:i:s');
        $data['updated_at'] = date('d/m/y H:i:s');

        $order_id = DB::table('orders')->insertGetId($data);

        $contents = DB::table('pos')->get();

        $order_data = array();

        foreach ($contents as $key => $content) {
            $order_data['order_id'] = $order_id;
            $order_data['product_id'] = $content->pro_id;
            $order_data['product_qty'] = $content->pro_quantity;
            $order_data['product_price'] = $content->product_price;
            $order_data['sub_total'] = $content->sub_total;
            $order_data['created_at'] = date('d/m/y H:i:s');
            $order_data['updated_at'] = date('d/m/y H:i:s');

            DB::table('order_details')->insert($order_data);

            Product::where('id', $content->pro_id)->update(['product_quantity' => DB::raw('product_quantity -'. $content->pro_quantity)]);

        }

        DB::table('pos')->delete();

        return response('DONE');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
