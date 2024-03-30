<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    public function index(){

        return view('employee.dashboard');

    }

    public function showEmployees(){
            $employees = User::where('role','LIKE','em%')->get();
        return view('employee.home',['employees' => $employees]);


    }
}
