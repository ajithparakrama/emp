<?php

namespace App\Http\Controllers;

use App\Models\employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\DataTables\allemployeesDatatable;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(allemployeesDatatable $dataTable)
    {
        return $dataTable->render('employee.index');
        // return view('employee.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.craete');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            ['first_name'=>'required|min:3|max:255',
            'last_name'=>'required|min:3|max:255',
            'nic'=>'required|min:10|max:13',
            'phone'=>'required|min:9|max:11',
            'address'=>'required|min:3|max:255',
            'employee_number'=>'required|min:3|max:50', 
            'epf_number'=>'required|min:1|max:55']
        );

        employee::create(
            ['first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'nic'=>$request->nic,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'employee_number'=>$request->employee_number,
            'user_id'=>Auth::user()->id,
            'epf_number'=>$request->epf_number
            ]
        );
        
        return redirect()->route('employee.index')->with('message','New Employee craeted.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(employee $employee)
    {
        return view('employee.show',compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(employee $employee)
    {
        return view('employee.edit',compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, employee $employee)
    {
        $request->validate(
            ['first_name'=>'required|min:3|max:255',
            'last_name'=>'required|min:3|max:255',
            'nic'=>'required|min:10|max:13',
            'phone'=>'required|min:9|max:10',
            'address'=>'required|min:3|max:255',
            'employee_number'=>'required|min:3|max:50', 
            'epf_number'=>'required|min:1|max:55']
        );

        $employee->update(
            ['first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'nic'=>$request->nic,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'employee_number'=>$request->employee_number,
            'user_id'=>Auth::user()->id,
            'epf_number'=>$request->epf_number
            ]
        );
        
        return redirect()->route('employee.index')->with('message','New Employee updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(employee $employee)
    {
        //
    }

    public function salary(employee $employee){
        return view('employee.salary',compact('employee'));
    }
}
