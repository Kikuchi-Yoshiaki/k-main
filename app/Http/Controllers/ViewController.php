<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\View;
use App\Article;
use Illuminate\Support\Facades\Storage;
//Image Magic
//use Intervention\Image\Facades\Image;

class ViewController extends Controller
{
    
    //風景画像を投稿してメッセージページに移動
    public function create(Request $request)
    {
        $this->validate($request, View::$rules);
        
        $views = new View;
        $form = $request->all();
        
        /*$image = Image::make($request->file('view_image'))->encode('jpg');
        //$path = $request->file('view_image')->store('public/view')->encode('jpg', 80);
        $path = $image->store('public/view');
        $views->view_image = basename($path);*/
        
        $path = $request->file('view_image')->store('public/view');
        $views->view_image = basename($path);
        
        unset($form['_token']);
        unset($form['view_image']);
        
        $views->fill($form)->save();
        
        return redirect('forms/message')
            ->with('title', '画像が投稿されました！')
            ->with('message', '投稿作品はユーザーページから編集・削除することができます。');
    }
    
    
    
    public function index(Request $request)
    {
        $views = View::all()->sortByDesc('updated_at');
        
        $articles = Article::all()->random(2);
        
        return view('main.view', ['views' => $views, 'articles' => $articles]);
    }
    
    
}
