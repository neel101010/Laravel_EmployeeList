<?php

use App\Models\EmployeeList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $employees = EmployeeList::all();
    return view('home',compact('employees'));
});

Route::get('edit/{id}',function ($id){
    $employee = EmployeeList::find($id);
    return view('edit_employee',compact('employee'));
});

Route::post('editing', function (Request $request){
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
})->name('edit_details');

Route::get('/add',function (){
    return view('add_employee');
});

Route::post('adding', function (Request $request){
    $employee = new EmployeeList();
    $employee->first_name = $request->first_name;
    $employee->last_name = $request->last_name;
    $employee->email = $request->email;
    $employee->contact = $request->contact;
    $employee->save();
    return redirect('/');
})->name('add_details');
