<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;

class ArticleController extends Controller
{
 
    //記事を投稿してメッセージページに移動
    public function create(Request $request)
    {
        $articles = new Article;
        $form = $request->all();
        
        
        if (isset($form['sub_image_1'])) {
            $path1 = $request->file('sub_image_1')->store('public/article');
            $articles->sub_image_1 = basename($path1);
        } else {
            $articles->sub_image_1 = null;
        }
        if (isset($form['sub_image_2'])) {
            $path2 = $request->file('sub_image_2')->store('public/article');
            $articles->sub_image_2 = basename($path2);
        } else {
            $articles->sub_image_2 = null;
        }
        if (isset($form['sub_image_3'])) {  
            $path3 = $request->file('sub_image_3')->store('public/article');
            $articles->sub_image_3 = basename($path3);
        } else {
            $articles->sub_image_3 = null;
        }
        if (isset($form['sub_image_4'])) {
            $path4 = $request->file('sub_image_4')->store('public/article');
            $articles->sub_image_4 = basename($path4);
        } else {
            $articles->sub_image_4 = null;
        }
        
        $path = $request->file('main_image')->store('public/article');
        $articles->main_image = basename($path);
        
        unset($form['_token']);
        unset($form['main_image']);
        unset($form['sub_image_1']);
        unset($form['sub_image_2']);
        unset($form['sub_image_3']);
        unset($form['sub_image_4']);
        
        $articles->fill($form);
        $articles->save();
        
        return redirect('forms/message')
            ->with('title', '記事が投稿されました！')
            ->with('message', '投稿作品はユーザーページから編集・削除することができます。');
    }
    
    
    //トップメニューで５記事を表示（トップ→$top ２〜５→$posts)
    public function topix(Request $request)
    {
        $posts = Article::orderBy('updated_at', 'DESC')->take(5)->get();
        $top = $posts->shift();
        
        return view('main.index', ['top' => $top, 'posts' => $posts]);
    }
    
    
    //記事一覧ページの記事表示
    public function index(Request $request)
    {
        $articles = Article::all()->sortByDesc('updated_at');
        return view('main.articleList', ['articles' => $articles]);
    }
    
    
    //風景一覧で記事をランダムに２個表示
    public function random(Request $request)
    {
        $articles = Article::all()->random(2);
        return view('main.view', ['articles' => $articles]);
    }
    
    
    //記事詳細で詳細を表示させる
    public function show(Request $request)
    {
        $show = Article::find($request->id);
        
        return view('main.detail', ['show' => $show]);
    }
    
}
