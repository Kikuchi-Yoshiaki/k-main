<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;
use App\View;

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
    
    
    
    //記事一覧ページの記事表示
    //風景画像をランダムで5枚表示
    public function index(Request $request)
    {
        $articles = Article::all()->sortByDesc('updated_at');
        
        $views = View::all()->random(5);
        
        return view('main.articleList', ['articles' => $articles, 'views' => $views]);
    }
    
    
    //記事詳細で詳細を表示させる
    public function show(Request $request)
    {
        $show = Article::find($request->id);
        
        return view('main.detail', ['show' => $show]);
    }
    
    
    //記事編集画面に記事情報を取得する
    public function edit(Request $request)
    {
        $article = Article::find($request->id);
        
        return view('user.articleEdit', ['form' => $article]);
    }
    
    
    //記事を更新
    public function update(Request $request)
    {
        $article = Article::find($request->id);
        $form = $request->all();
        
        if(isset($form['sub_image_1'])) {
            $path = $request->file('sub_image_1')->store('public/article');
            $article->sub_image_1 = basename($path);
        } else {
            $article->sub_image_1 = null;
        }
        if(isset($form['sub_image_2'])) {
            $path = $request->file('sub_image_2')->store('public/article');
            $article->sub_image_2 = basename($path);
        } else {
            $article->sub_image_2 = null;
        }
        if(isset($form['sub_image_3'])) {
            $path = $request->file('sub_image_3')->store('public/article');
            $article->sub_image_3 = basename($path);
        } else {
            $article->sub_image_3 = null;
        }
        if(isset($form['sub_image_4'])) {
            $path = $request->file('sub_image_4')->store('public/article');
            $article->sub_image_4 = basename($path);
        } else {
            $article->sub_image_4 = null;
        }
        /*if(isset($form['image_text'])) {
            $article->image_text = $form['image_text'];
        } else {
            $article->image_text = null;
        }*/
        
        
        
        
        
        $path = $request->file('main_image')->store('public/article');
        $article->main_image = basename($path);
        
        unset($form['_token']);
        unset($form['main_image']);
        unset($form['sub_image_1']);
        unset($form['sub_image_2']);
        unset($form['sub_image_3']);
        unset($form['sub_image_4']);
        
        $article->fill($form)->save();
        
        return redirect('forms/message')
            ->with('title', '更新完了！')
            ->with('message', '記事がが更新されました。');;
    }
    
}
