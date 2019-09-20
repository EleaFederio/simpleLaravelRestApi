<?php

namespace App\Http\Controllers;

use App\Http\Resources\EmployeeResource;
use App\Http\Resources\EmployeeResourceCollection;
use Illuminate\Http\Request;
use App\Employee;

class EmployeeController extends Controller
{
    public function show(Employee $employee): EmployeeResource{
		return new EmployeeResource($employee);
	}

	public function index(): EmployeeResourceCollection{
        return new EmployeeResourceCollection(Employee::paginate());
    }

    public function store(Request $request){
        $request->validate = [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ];
        $employee = Employee::create($request->all());
        return new EmployeeResource($employee);
    }

    public function update(Employee $employee, Request $request): EmployeeResource{
        $employee->update($request->all());
        return new EmployeeResource($employee);
    }

    public  function destroy(Employee $employee){
        $employee->delete();
        return response()->json();
    }
}
