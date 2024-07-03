<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();

        return view('employee.index', [
            'employees' => $employees

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $employee = new Employee;
        // $employee->name = $request->name;
        // $employee->email = $request->email;

        //this both above and below code are working(okey)

        $employee->name = $request->input('name');
        $employee->email = $request->input('email');
        $employee->tel = $request->input('tel');
        $employee->save();
        return redirect()->route('employee.index')->with('success', 'Your Details added successfully. ');
    }


    public function show(Employee $employee)
    {
        return view('employee.show', [
            'employee' => $employee

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        return view('employee.edit', [
            'employee' => $employee //this defines the variable $employee

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        //    $employee = new Employee; this is not paste from the store cause we are just updating the data not creating a new details.
        $employee->name = $request->input('name');
        $employee->email = $request->input('email');
        $employee->tel = $request->input('tel');
        if ($request->hasFile('image_path')) {
            $file = $request->file('image_path');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move('uploads/employees', $fileName);
            $employee->image_path = $fileName;

            # code...
        }


        $employee->save();
        return redirect()->route('employee.index')->with('warning', 'Your Details updated successfully. ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employee.index')->with('errorMsg', 'Your Details Deleted Successfully.');
    }
}
