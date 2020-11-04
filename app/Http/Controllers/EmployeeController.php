<?php

namespace App\Http\Controllers;

use App\Models\EmployeeList;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    function list() {
        $employees = EmployeeList::all();
        return view('home',compact('employees'));
    }

    function editPage($id){
        $employee = EmployeeList::find($id);
        return view('edit_employee',compact('employee'));
    }

    function edit(Request $request){
        $emp = EmployeeList::find($request->id);
        if($request->first_name)
        {
            $emp->first_name = $request->first_name;
        }
        if($request->last_name)
        {
            $emp->last_name = $request->last_name;
        }
        if($request->email)
        {
            $emp->email = $request->email;
        }
        if($request->contact)
        {
            $emp->contact = $request->contact;
        }
        $emp->save();
        return redirect('/');
    }

    function addPage(){
        return view('add_employee');
    }

    function add(Request $request){
        $employee = new EmployeeList();
        $employee->first_name = $request->first_name;
        $employee->last_name = $request->last_name;
        $employee->email = $request->email;
        $employee->contact = $request->contact;
        $employee->save();
        return redirect('/');
    }
}
