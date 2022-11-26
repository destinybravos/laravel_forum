<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home_page(Request $req){
        return view('pages.index');
    }

    public function about_page(Request $request)
    {
        return view('pages.about');
    }

    public function contant_page()
    {
        return view('pages.contact');
    }

    public function store_contact(Request $request)
    {
        $contact = new Contact();
        $contact->name = $request->client_name;
        $contact->email = $request->client_email;
        $contact->subject = $request->subject;
        $contact->message = $request->msg;
        $contact->save();
        return redirect()->back();
    }
}
