<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contact;


class ContactController extends Controller
{
    public function add()
    {
        return view('forms.contact');
    }
    
    public function create(Request $request)
    {
        $contacts = new Contact;
        $form = $request->all();
        unset($form['_token']);
        $contacts->fill($form);
        $contacts->save();

        return redirect('/forms/message');
    }
    
}
