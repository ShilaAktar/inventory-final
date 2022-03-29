<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Employee;

class employeeController extends Controller

{
    public function employeelist(){
     $employees=Employee::all();
     
     return view('backend.pages.employee',compact('employees'));


    }
}

