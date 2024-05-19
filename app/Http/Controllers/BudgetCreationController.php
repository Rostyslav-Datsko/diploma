<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use Illuminate\Http\Request;

class BudgetCreationController extends Controller
{
    public function showForm()
    {
        return view('new_budget_form');
    }

    public function addBudget()
    {
        $budget = Budget::with(["user"])->get();
    }

}
