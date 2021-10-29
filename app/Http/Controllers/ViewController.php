<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\View;
use App\Article;
use App\User;
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
            ->with('message', '投稿作品はユーザーページから編集・削除することができます。')
            ->with('url', '/user?id=')
            ->with('page', 'マイページに移動');
    }
    

    public function index(Request $request)
    {
        $views = View::orderBy('updated_at', 'desc')
            ->paginate(24);
        
        $articles = Article::all()->random(2);
        
        return view('main.view', ['views' => $views, 'articles' => $articles]);
    }


    public function deleteEdit(Request $request)    
    {
        $view = View::find($request->id);
        //指定IDがなければトップページに移動
        if(!isset($view))
        {
            return redirect('/');
        }
        return view('user.viewDelete', ['view' => $view]);
    }
    
    
    //風景画像を削除する
    public function delete(Request $request)
    {
        $delete = View::find($request->id);
        $delView = $delete->view_image;
        Storage::delete('public/view/'.$delView);
        $delete->delete();
        
        
        return redirect('/forms/message')
            ->with('title', '削除完了')
            ->with('message','投稿画像を削除しました。')
            ->with('url', '/user?id=')
            ->with('page', 'マイページに戻る');
    }
}
