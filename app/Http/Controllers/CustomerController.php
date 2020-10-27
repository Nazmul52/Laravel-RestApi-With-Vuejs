<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use Validator;
use Image;
class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer  = Customer::all();

        return response()->json($customer);
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
            'name' => 'required|between:2,100',
            'phone' => 'required',
            'address' => 'required',
            
        ]);
        $img_url = '';
        if($request->photo){
            $position = strpos($request->photo, ';');
            $sub = substr($request->photo, 0, $position);
            $ext = explode('/', $sub)[1];

            $name = time().".".$ext;
            $img = Image::make($request->photo)->resize(240,200);

            $upload_path = 'backend/customer/';
            $img_url = $upload_path.$name;

            $img->save($img_url);
        }


        $customer = new Customer;

        $customer->name = $request->name;
        $customer->email = $request->email;
       
        $customer->phone = $request->phone;
        $customer->address = $request->address;
        $customer->photo = $img_url;

        $customer->save();

        return response()->json([
            'message' => 'Successfully added new customer',
            'user' => $customer
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        $showCustomer = Customer::where('id', $customer->id)->first();

        return response()->json($showCustomer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $customer_id)
    {
         $validator = Validator::make($request->all(), [
            'name' => 'required|between:2,100',
            'phone' => 'required',
            'address' => 'required',
            
        ]);
        $img_url = '';
        if($request->new_photo){
            $position = strpos($request->new_photo, ';');
            $sub = substr($request->new_photo, 0, $position);
            $ext = explode('/', $sub)[1];

            $name = time().".".$ext;
            $img = Image::make($request->new_photo)->resize(240,200);

            $upload_path = 'backend/customer/';
            $img_url = $upload_path.$name;

            $img->save($img_url);
        }


        $customer = Customer::find($customer_id);
        $customer_photo = Customer::find($customer_id);

         $customer->name = $request->name;
        $customer->email = $request->email;
       
        $customer->phone = $request->phone;
        $customer->address = $request->address;
        // $product->image = $img_url;


        if($img_url){
            if($customer_photo->photo){
                $done = unlink($product_photo->photo);    
            }
            
            $customer->photo = $img_url;    
        }
        

        $customer->save();

        return response()->json([
            'message' => 'Successfully updated customer information',
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        $remove = Customer::find($customer->id);
        $photo = $customer->photo;
        if($photo){
            unlink($photo);
        }
        $remove->delete();
    }
}
