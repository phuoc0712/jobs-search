<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyCreateRequest;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index(Request $request)
    {
        $company = Company::query();
        if($request->query('name')){
            $company->where('name', $request->query('name'));dd($company->where('name', $request->query('name')));
        }

        

        $companies = Company::paginate(5)->withQueryString();
        return view('company.index', [
            'companies' => $company
        ]);
    }

    public function create()
    {
        return view('company.create');
    }

    public function store(Request $request)
    {
        $company = Company::create($request->input());
        if ($company) {
            return redirect('/companies');
        }
    }

    public function edit($company_id)
    {
        $company = Company::findOrFail($company_id);
        return view('company.edit', [
            'company' => $company
        ]);
    }

    public function update($company_id, Request $request)
    {
        $company = Company::findOrFail($company_id)->update($request->input());
        if ($company) {
            return redirect('/companies');
        }
    }

    public function destroy($company_id)
    {
        $company = Company::destroy($company_id);
        if ($company) {
            return redirect('/companies');
        }
    }

    public function show($company_id)
    {
        $company = Company::findOrFail($company_id);
        if ($company) {
            return view('company.show', [
                'company' => $company
            ]);
        }
    }
}
