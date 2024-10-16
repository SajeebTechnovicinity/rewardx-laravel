<?php

namespace App\Http\Controllers;

use App\Mail\ContactNotificationEmail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required'
        ]);

        $email = env('REWARDS_ADMIN_EMAIL');
        $details =[
            'user_name' => 'Admin',
            'title' => 'New Contact Form Submission',
            'body' => 'A new contact form submission has been received. First Name: ' . $request->first_name . ', Last Name: ' . $request->last_name . ', Email: ' . $request->email . ', Phone: ' . $request->phone . ', Message: ' . $request->message
        ];
        Mail::to($email)->send(new ContactNotificationEmail($details));

        $contact = new Contact();
        $contact->first_name = $request->first_name;
        $contact->last_name = $request->last_name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->message = $request->message;
        $contact->save();

        return redirect('/success');
    }
    public function index()
    {
        $contacts = Contact::all();
        return view('contact.index', compact('contacts'));
    }
}
