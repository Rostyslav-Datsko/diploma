<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BudgetManagementController extends Controller
{
    public function index()
    {
        return view('budget_management_history');
    }

    public function indexCharts()
    {
        return view('budget_management_charts');
    }
    public function indexAddform()
    {
        return view('budget_management_addform');
    }

    public function indexExtract()
    {
        return view('budget_management_extract');
    }
}
