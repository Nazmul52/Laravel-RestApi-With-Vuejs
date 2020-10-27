<?php

namespace App\Http\Controllers;

use App\Salary;
use Illuminate\Http\Request;
use Validator;


class SalaryController extends Controller
{
   

   public function index(){
        $salary = Salary::select('salary_month')->groupBy('salary_month')->get();

        return response()->json($salary);
   }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function paid(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'employee_id' => 'required',
            
          
        ]);
        $month = $request->salary_month;
        $check = Salary::where('employee_id', $id)->where('salary_month', $month)->first();

        if($check){
            return response()->json('Salary Already Paid.');
        }else{
            $salary = new Salary;

            $salary->employee_id = $id;
            $salary->amount = $request->amount;
            $salary->salary_date = date('d/m/y');
            $salary->salary_month = date('F');
            $salary->salary_year = date('Y');
            
            $salary->save();

            return response()->json([
                'message' => 'Successfully pay employee salary',
                'user' => $salary
            ], 201);
        }

       
    }

    public function viewSalary($id){
       $view =  Salary::join('employees', 'salaries.employee_id', '=', 'employees.id')->where('salary_month', $id)->select('employees.name', 'salaries.*')->get();

       return response()->json($view);
    }


    public function editSalary($id )  {
         $view =  Salary::join('employees', 'salaries.employee_id', '=', 'employees.id')->where('salaries.id', $id)->select('employees.name','employees.email', 'salaries.*')->first();

       return response()->json($view);
    } 

    public function updateSalary(Request $request,  $id){
         $validator = Validator::make($request->all(), [
            'amount' => 'required',
            'salary_month' => 'required',
           
        ]);
        


        $salary = Salary::find($id);
        
        $salary->amount = $request->amount;
        $salary->salary_month = $request->salary_month;
        // $salary->salary_date = date('d/m/y');
        // $salary->salary_year = date('Y');
            
        

        $salary->save();

        return response()->json([
            'message' => 'Successfully updated salary information',
        ], 201);
    }

   
}
