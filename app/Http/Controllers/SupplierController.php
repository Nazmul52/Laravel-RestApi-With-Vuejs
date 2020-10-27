<?php

namespace App\Http\Controllers;

use App\Supplier;
use Illuminate\Http\Request;
use Image;
use Validator;
class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $supplier = Supplier::all();

        return response()->json($supplier);
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
            'email' => 'required|email|unique:supplier|max:50',
            'phone' => 'required',
            'address' => 'required',
            'photo' => 'string'
        ]);
        $img_url = '';
        if($request->photo){
            $position = strpos($request->photo, ';');
            $sub = substr($request->photo, 0, $position);
            $ext = explode('/', $sub)[1];

            $name = time().".".$ext;
            $img = Image::make($request->photo)->resize(240,200);

            $upload_path = 'backend/supplier/';
            $img_url = $upload_path.$name;

            $img->save($img_url);
        }


        $supplier = new Supplier;

        $supplier->name = $request->name;
        $supplier->email = $request->email;
        $supplier->address = $request->address;
        $supplier->phone = $request->phone;
        $supplier->shopname = $request->shopname;
        $supplier->photo = $img_url;

        $supplier->save();

        return response()->json([
            'message' => 'Successfully added new supplier',
        ], 201);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplier)
    {
        $showSupplier = Supplier::where('id', $supplier->id)->first();

        return response()->json($showSupplier);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit(Supplier $supplier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $supplier_id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|between:2,100',
            'email' => 'required|email|unique:suppliers|max:50',
            'phone' => 'required',
            'address' => 'required',
            'photo' => 'string',
        ]);
        $img_url = '';
        if($request->new_photo){
            $position = strpos($request->new_photo, ';');
            $sub = substr($request->new_photo, 0, $position);
            $ext = explode('/', $sub)[1];

            $name = time().".".$ext;
            $img = Image::make($request->new_photo)->resize(240,200);

            $upload_path = 'backend/supplier/';
            $img_url = $upload_path.$name;

            $img->save($img_url);
        }


        $supplier = Supplier::find($supplier_id);
        $supplier_photo = Supplier::find($supplier_id);

        $supplier->name = $request->name;
        $supplier->email = $request->email;
        $supplier->address = $request->address;
        $supplier->phone = $request->phone;
        if($img_url){
            if($supplier_photo->photo){
                $done = unlink($supplier_photo->photo);    
            }
            
            $supplier->photo = $img_url;    
        }
        

        $supplier->save();

        return response()->json([
            'message' => 'Successfully updated supplier information',
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplier $supplier)
    {
        $remove = Supplier::find($supplier->id);
        $photo = $supplier->photo;
        if($photo){
            unlink($photo);
        }
        $remove->delete();
    }
}
