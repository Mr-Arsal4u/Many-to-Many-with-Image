<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmployeeController extends Controller
{
    public function edit($companyId, $employeeId)
    {


        $company = Company::findOrFail($companyId);
        $employee = Employee::findOrFail($employeeId);

        return view('more.edit', compact('company', 'employee'));
    }

    public function update(Request $request, $companyId, $employeeId)
    {

        $company = Company::findOrFail($companyId);


        $employee = Employee::findOrFail($employeeId);

        
        $company->name = $request->input('company_name');
        $company->email = $request->input('company_email');
        $company->website = $request->input('company_website');

        $company->save();

        $employee->first_name = $request->input('employee_first_name');
        $employee->last_name = $request->input('employee_last_name');
        $employee->email = $request->input('employee_email');
        $employee->phone = $request->input('employee_phone');

        $employee->save();


        // if ($request->hasFile('image')) {
        //     Storage::delete('public/' . $employee->image);


            $imagePath = $request->file('image')->store('employee_images', 'public');
            $employee->image = $imagePath;
            $employee->save();


        return redirect()->route('company.index')->with('success', 'Employee updated successfully');
    }


    public function destroy($companyId)
    {
        $company = Company::findOrFail($companyId);
        foreach ($company->employees as $employee) {
            if ($employee->image) {
                Storage::delete('public/' . $employee->image);
            }
        }


        $company->employees()->delete();


        if ($company->image) {
            Storage::delete('public/' . $company->image);
        }


        $company->delete();

        return redirect()->route('company.index');
    }

}