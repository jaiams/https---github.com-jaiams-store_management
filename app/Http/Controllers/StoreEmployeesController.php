<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\store_employees;
use App\Models\store_storename;

class StoreEmployeesController extends Controller
{
    public function index(){
       
        $emp = store_employees::all();
       
        return view('emp.index',compact('emp'));


    }
    public function create(){

        $store = store_storename::all();

        return view('emp.create',compact('store'));
    }


    public function store(Request $request){

        $emp = new store_employees;
        $emp->emp_name = $request->emp_name;
        $emp->emp_position = $request->emp_position;
        $emp->emp_store = $request->emp_store;
        $emp->emp_address = $request->emp_address;
        $emp->emp_contact = $request->emp_contact;
        $emp->emp_email = $request->emp_email;
        $emp->save();

     
        return redirect()->route('emp.index')->with('success','Employee added successfully');
    }




    public function edit($id){

        $emp = store_employees::find($id);
        $store = store_storename::all();
        return view('emp.edit',compact('store'))->with('emp',$emp);
    }

    public function update(Request $request, $id){

        $emp = store_employees::find($request->id);
        $emp->emp_name = $request->emp_name;
        $emp->emp_position = $request->emp_position;
        $emp->emp_store = $request->emp_store;
        $emp->emp_address = $request->emp_address;
        $emp->emp_contact = $request->emp_contact;
        $emp->emp_email = $request->emp_email;
        $emp->save();
        return redirect()->route('emp.index')->with('edited','Employee updated successfully');
    }


    public function destroy($id){
      

        store_employees::destroy($id);
        return redirect()->route('emp.index')->with('deleted','Store delete successfully');

    }
}
