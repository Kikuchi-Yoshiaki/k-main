<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;


class UserController extends Controller
{

    public function create(Request $request)
    {
        $users = new User;
        $form = $request->all();
        
        if (isset($form['profile_image'])) {
            $path = $request->file('profile_image')->store('public/image');
            $users->profile_image = basename($path);
        } else {
            $users->profile_image = null;
        
        
        unset($form['_token']);
        unset($form['profile_image']);
        
        $users->fill($form);
        $users->save();

        return redirect('/forms/message');        
    }
}
