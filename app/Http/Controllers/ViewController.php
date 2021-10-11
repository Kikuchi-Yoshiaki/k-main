<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\View;

class ViewController extends Controller
{
    
    //風景画像を投稿してメッセージページに移動
    public function create(Request $request)
    {
        $views = new View;
        $form = $request->all();
        
        $path = $request->file('view_image')->store('public/view');
        $views->view_image = basename($path);
        
        unset($form['_token']);
        unset($form['view_image']);
        
        $views->fill($form)->save();
        
        return redirect('forms/message')
            ->with('title', '画像が投稿されました！')
            ->with('message', '投稿作品はユーザーページから編集・削除することができます。');
    }
    
    
    


}
