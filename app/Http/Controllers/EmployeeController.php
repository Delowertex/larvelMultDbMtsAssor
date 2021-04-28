<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function addEmployee(){
        $employee = new Employee();
        $employee->name = 'Kamal';
        $employee->email = 'KAMALmia@gmail.com';
        $employee->phone = '1234567890';
        $employee->save();
        return "Recorded is inserted !";
    }

    public function getEmployee(){
        return Employee::all();
    }
}
