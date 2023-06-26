<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index() {
        return view('index');
    }

    public function confirm(ContactRequest $request) {
        $contact = $request->only(['full_name','last_name', 'first_name', 'gender','email', 'postcode', 'address', 'building_name', 'opinion']);
        
        return view('confirm', compact('contact'));
    }

    public function store(ContactRequest $request) {
        $contact = $request->only(['full_name', 'last_name', 'first_name', 'gender', 'email', 'postcode', 'address', 'building_name', 'opinion']);
        Contact::create($contact);
        if($request->input('back') == 'back'){
            return redirect('index')->withInput();
        }
        return view('thanks');
    }

    public function admin() {
        $contacts = Contact::all();
        // $contact = $request->only([ 'id', 'full_name', 'last_name', 'first_name', 'gender', 'email', 'postcode', 'address', 'building_name', 'opinion']);
        $contacts = Contact::Paginate(10);
        return view('admin', compact('contacts'));
    }
}
