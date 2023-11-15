<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = Company::all();
        $employees= Employee::all();
        return view('more.show', compact('companies', 'employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }


        $company = Company::create([
            'name' => $request->company_name,
            'email' => $request->company_email,
            'website' => $request->company_website,
        ]);


        $employee = Employee::create([
            'first_name' => $request->employee_first_name,
            'last_name' => $request->employee_last_name,
            'email' => $request->employee_email,
            'phone' => $request->employee_phone,
            'image' => $imagePath,
        ]);

        $employee->companies()->attach($company->id);

        return redirect()->route('company.index')->with('success', 'Company and Employee information saved successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit($companyId, $employeeId)
    // // {
    // //     $company = Company::findOrFail($companyId);
    // //     $employee = $company->employees()->findOrFail($employeeId);

    // //     return view('companies.edit', compact('company', 'employee'));
    // // }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}