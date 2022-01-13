<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Session;

class EmployeeController extends Controller
{
    public function showData(){
        $data = Employee::simplePaginate(10);
        return view('show_data',compact('data'));
    }

    public function addData(){
        return view('add_employee');
    }

    public function storeData(Request $request){
        
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required|email',

        ]);
       
        $employee= new Employee();
        
        $employee->first_name = $request->first_name;
        $employee->last_name = $request->last_name;
        $employee->address = $request->address;
        $employee->email = $request->email;
        $employee->mobile_number = $request->mobile_number;
        $employee->save();

        Session::flash('message','Employee has Successfully Added');

        return redirect('/');
    }

    public function editData($id = null){
        $edit_employee = Employee::find($id);

        return view('edit_employee',compact('edit_employee'));
    }

    public function updateData(Request $request, $id){
        
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required|email',

        ]);
       
        $employee= Employee::find($id);
        
        $employee->first_name = $request->first_name;
        $employee->last_name = $request->last_name;
        $employee->address = $request->address;
        $employee->email = $request->email;
        $employee->mobile_number = $request->mobile_number;
        $employee->save();

        Session::flash('message','Employee has Successfully Updated');

        return redirect('/');
    }

    public function deleteData($id = null){
        $delete_employee = Employee::find($id);

        $delete_employee->delete();
        Session::flash('deleteMessage','Employee has Successfully Deleted');

        return redirect('/');
       
    }
}
