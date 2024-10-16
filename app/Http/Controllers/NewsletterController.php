<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:newsletters'
        ]);

        $newsletter = new Newsletter();
        $newsletter->email = $request->email;
        $newsletter->save();

        return redirect('/success');
    }
    public function index()
    {
        $newsletters = Newsletter::all();
        return view('newsletter.index', compact('newsletters'));
    }
}
