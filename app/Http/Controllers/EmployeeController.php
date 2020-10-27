<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;
use Image;
use Validator;
class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employee = Employee::all();

        return response()->json($employee);
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
            'email' => 'required|email|unique:employees|max:50',
            'phone' => 'required',
            'address' => 'required',
            'salary' => 'required',
        ]);
        $img_url = '';
        if($request->photo){
            $position = strpos($request->photo, ';');
            $sub = substr($request->photo, 0, $position);
            $ext = explode('/', $sub)[1];

            $name = time().".".$ext;
            $img = Image::make($request->photo)->resize(240,200);

            $upload_path = 'backend/employee/';
            $img_url = $upload_path.$name;

            $img->save($img_url);
        }


        $employee = new Employee;

        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->address = $request->address;
        $employee->phone = $request->phone;
        $employee->salary = $request->salary;
        $employee->nid = $request->nid;
        $employee->joining_date = $request->joining_date;
        $employee->photo = $img_url;

        $employee->save();

        return response()->json([
            'message' => 'Successfully added new employee',
            'user' => $employee
        ], 201);

        // return $this->login($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        $showEmployee = Employee::where('id', $employee->id)->first();

        return response()->json($showEmployee);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $emp_id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|between:2,100',
            'email' => 'required|email|unique:employees|max:50',
            'phone' => 'required',
            'address' => 'required',
            'salary' => 'required',
            'photo' => 'string',
        ]);
        $img_url = '';
        if($request->new_photo){
            $position = strpos($request->new_photo, ';');
            $sub = substr($request->new_photo, 0, $position);
            $ext = explode('/', $sub)[1];

            $name = time().".".$ext;
            $img = Image::make($request->new_photo)->resize(240,200);

            $upload_path = 'backend/employee/';
            $img_url = $upload_path.$name;

            $img->save($img_url);
        }


        $employee = Employee::find($emp_id);
        $emp_photo = Employee::find($emp_id);

        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->address = $request->address;
        $employee->phone = $request->phone;
        $employee->salary = $request->salary;
        $employee->nid = $request->nid;
        $employee->joining_date = $request->joining_date;
        if($img_url){
            if($emp_photo->photo){
                $done = unlink($emp_photo->photo);    
            }
            
            $employee->photo = $img_url;    
        }
        

        $employee->save();

        return response()->json([
            'message' => 'Successfully updated employee information',
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $remove = Employee::find($employee->id);
        $photo = $employee->photo;
        if($photo){
            unlink($photo);
        }
        $remove->delete();
    }
}
