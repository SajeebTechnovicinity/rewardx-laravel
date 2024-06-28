<?php

namespace App\Http\Controllers;

use App\Models\Credit;
use Illuminate\Http\Request;

class CreditController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'amount' => 'required',
            'bank_name' => 'required',
            'email' => 'required',
        ]);

        $credit = new Credit();
        $credit->amount = $request->amount;
        $credit->bank_name = $request->bank_name;
        $credit->email = $request->email;
        $credit->save();

        return redirect('/success');
    }
    public function index()
    {
        $credits = Credit::all();
        return view('credits.index', compact('credits'));
    }
}
