<?php

namespace App\Http\Controllers;

use App\Expense;
use Illuminate\Http\Request;
use Validator;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expense = Expense::all();

        return response()->json($expense);
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
            'details' => 'required',
            'amount' => 'required',
          
        ]);
        

        $expense = new Expense;

        $expense->details = $request->details;
        $expense->amount = $request->amount;
        $expense->expense_date = date('d/m/y');
        
        $expense->save();

        return response()->json([
            'message' => 'Successfully added new expenses',
            'user' => $expense
        ], 201);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function show(Expense $expense)
    {
        $showExpense = Expense::where('id', $expense->id)->first();

        return response()->json($showExpense);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function edit(Expense $expense)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'details' => 'required',
            'amount' => 'required',
          
        ]);
        

        $expense = Expense::find($id);

        $expense->details = $request->details;
        $expense->amount = $request->amount;
        $expense->expense_date = date('d/m/y');
        

        $expense->save();

        return response()->json([
            'message' => 'Successfully updated expense information',
            'user' => $expense
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function destroy(Expense $expense)
    {
        $remove = Expense::find($expense->id);
          
        $remove->delete();
    }
}
