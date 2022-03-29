<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;


class employeeformController extends Controller

{
    public function employeeform(){
     $employees=Employeeform::all();
     
     return view('backend.pages.employeeform',compact('employeeforms'));
    }
}