<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;
use App\View;
use App\User;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
 
    //記事を投稿してプレビュー画面に移動
    public function create(Request $request)
    {
        $this->validate($request, Article::$rules);
        
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
        
        return redirect('article/preview?id=' . $articles->id)
            ->with('title', '記事が投稿されました！');
        
        //return redirect('article/preview?id=' . $articles->id);
           
    }
    
    public function preview(Request $request)
    {
        $preview = Article::find($request->id);
        
        return view('user.articlePreview', ['preview' => $preview])
            ->with('title', '記事が投稿されました！');
    }
    
    
    
    
    //記事一覧ページの記事表示
    //風景画像をランダムで5枚表示
    public function index(Request $request)
    {
        
        if ($request->category == 'enjoy')
        {
            $articles = Article::where('category','気仙沼の遊ぶ')
                ->latest()
                ->paginate(4);
        } elseif ($request->category == 'food') 
        {
            $articles = Article::where('category','気仙沼の食べる')
                ->latest()
                ->paginate(4);
        } elseif ($request->category == 'life') 
        {
            $articles = Article::where('category','気仙沼の生活')
                ->latest()
                ->paginate(4);
        } else 
        {
            $articles = Article::orderBy('updated_at', 'desc')
                ->paginate(4);
        }
        
        
        $views = View::all()->random(6);
        
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
    
    
    //削除確認画面に移動して表示
    public function deleteEdit(Request $request)
    {
        $article = Article::find($request->id);
        
        return view('user.articleDelete', ['article' => $article]);
    }
    
    
    //記事を更新
    public function update(Request $request)
    {
        $this->validate($request, Article::$rules);
        
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
        
        $delMain = $article->main_image;
        Storage::delete('public/article/'.$delMain);
        $delSub1 = $article->sub_image_1;
        Storage::delete('public/article/'.$delSub1);
        $delSub2 = $article->sub_image_2;
        Storage::delete('public/article/'.$delSub2);
        $delSub3 = $article->sub_image_3;
        Storage::delete('public/article/'.$delSub3);
        $delSub4 = $article->sub_image_4;
        Storage::delete('public/article/'.$delSub4);
        
        
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
            ->with('message', '記事がが更新されました。')
            ->with('url', '/user?id=')
            ->with('page', 'マイページに戻る');
    }
    
    
    //風景画像を削除する
    public function delete(Request $request)
    {
        $delete = Article::find($request->id);
        $delMain = $delete->main_image;
        Storage::delete('public/article/'.$delMain);
        $delSub1 = $delete->sub_image_1;
        Storage::delete('public/article/'.$delSub1);
        $delSub2 = $delete->sub_image_2;
        Storage::delete('public/article/'.$delSub2);
        $delSub3 = $delete->sub_image_3;
        Storage::delete('public/article/'.$delSub3);
        $delSub4 = $delete->sub_image_4;
        Storage::delete('public/article/'.$delSub4);
        $delete->delete();
        
        return redirect('/forms/message')
            ->with('title', '削除完了')
            ->with('message', '投稿された記事を削除しました。')
            ->with('url', '/user?id=')
            ->with('page', 'マイページに戻る');
    }
    
}
