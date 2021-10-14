<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contact;


class ContactController extends Controller
{
    
    //問い合わせページに移動する
    public function add()
    {
        return view('forms.contact');
    }
    
    
    //問い合わせ内容を送信し、メッセージページに移動する
    public function create(Request $request)
    {
        $this->validate($request, Contact::$rules);
        
        $contacts = new Contact;
        $form = $request->all();
        unset($form['_token']);
        $contacts->fill($form);
        $contacts->save();

        return redirect('/forms/message')
            ->with('title', '送信完了')
            ->with('message', 'お問い合わせを送信しました。');
    }
    
}
