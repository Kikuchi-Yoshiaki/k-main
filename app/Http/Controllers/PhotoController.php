<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Photo;

class PhotoController extends Controller
{
    public function create(Request $request)
    {
        $photos = new Photo;
        $form = $request->all();
    
        $path = $request->file('image')->store('public/photo');
        $photos->image = basename($path);
    
        unset($form['_token']);
        unset($form['image']);
    
        $photos->fill($form)->save();
        return redirect('/');
    
    }
    
    public function index(Request $request)
    {
        $photos = Photo::all();
        return view('main.index', ['photos' => $photos]);
    }
    
    
}
