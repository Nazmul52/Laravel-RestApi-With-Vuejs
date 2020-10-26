<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Validator;
use Image;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product  = Product::join('categories', 'products.category_id', '=', 'categories.id')->join('suppliers', 'products.supplier_id', '=', 'suppliers.id')->select('categories.name', 'suppliers.name  as supplier_name', 'products.*')->orderBy('products.id', 'DESC')->get();

        return response()->json($product);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'product_name' => 'required|between:2,100',
            'product_code' => 'required',
            'product_quantity' => 'required',
            'selling_price' => 'required',
            'category_id' => 'required',
        ]);
        $img_url = '';
        if($request->image){
            $position = strpos($request->image, ';');
            $sub = substr($request->image, 0, $position);
            $ext = explode('/', $sub)[1];

            $name = time().".".$ext;
            $img = Image::make($request->image)->resize(240,200);

            $upload_path = 'backend/product/';
            $img_url = $upload_path.$name;

            $img->save($img_url);
        }


        $product = new Product;

        $product->product_name = $request->product_name;
        $product->product_code = $request->product_code;
        $product->product_quantity = $request->product_quantity;
        $product->buying_price = $request->buying_price;
        $product->selling_price = $request->selling_price;
        $product->category_id = $request->category_id;
        $product->supplier_id = $request->supplier_id;
        $product->root = $request->root;
        $product->buying_date = $request->buying_date;
        $product->image = $img_url;

        $product->save();

        return response()->json([
            'message' => 'Successfully added new product',
            'user' => $product
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $showProduct = Product::where('id', $product->id)->first();

        return response()->json($showProduct);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $product_id)
    {
        $validator = Validator::make($request->all(), [
            'product_name' => 'required|between:2,100',
            'product_code' => 'required',
            'product_quantity' => 'required',
            'selling_price' => 'required',
            'category_id' => 'required',
        ]);
        $img_url = '';
        if($request->new_photo){
            $position = strpos($request->new_photo, ';');
            $sub = substr($request->new_photo, 0, $position);
            $ext = explode('/', $sub)[1];

            $name = time().".".$ext;
            $img = Image::make($request->new_photo)->resize(240,200);

            $upload_path = 'backend/product/';
            $img_url = $upload_path.$name;

            $img->save($img_url);
        }


        $product = Product::find($product_id);
        $product_photo = Product::find($product_id);

          $product->product_name = $request->product_name;
        $product->product_code = $request->product_code;
        $product->product_quantity = $request->product_quantity;
        $product->buying_price = $request->buying_price;
        $product->selling_price = $request->selling_price;
        $product->category_id = $request->category_id;
        $product->supplier_id = $request->supplier_id;
        $product->root = $request->root;
        $product->buying_date = $request->buying_date;
        // $product->image = $img_url;


        if($img_url){
            if($product_photo->image){
                $done = unlink($product_photo->image);    
            }
            
            $product->image = $img_url;    
        }
        

        $product->save();

        return response()->json([
            'message' => 'Successfully updated product information',
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $remove = Product::find($product->id);
        $photo = $product->image;
        if($photo){
            unlink($photo);
        }
        $remove->delete();
    }
}
