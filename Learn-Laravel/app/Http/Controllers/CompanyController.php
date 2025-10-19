<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        // Eager load to prevent N+1 problem
        $companies = Company::with(['bus', 'driver'])->get();

        return view('pages.company.index', compact('companies'));
    }
}

