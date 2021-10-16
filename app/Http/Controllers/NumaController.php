<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Article;
use App\View;


class NumaController extends Controller
{
    public function add()
    {
        return view('main.index');
    }
    
    
    //トップメニューで５記事を表示（トップ→$top ２〜５→$posts)
    //風景写真を最新で12枚表示
    public function topix(Request $request)
    {
        $posts = Article::orderBy('updated_at', 'DESC')->take(5)->get();
        $top = $posts->shift();
        
        $views = View::orderBy('updated_at', 'DESC')->take(12)->get();
        
        
        return view('main.index', ['top' => $top, 'posts' => $posts, 'views' => $views]);
    }



    //ビュー確認用のAction
    public function login()
    {
        return view('forms.login');
    }
    public function signup()
    {
        return view('forms.signup');
    }
    
    public function message()
    {
        return view('forms.message');
    }
    public function viewPost()
    {
        return view('user.viewPost');
    }
    public function articlePost()
    {
        return view('user.articlePost');
    }
    public function articleEdit()
    {
        return view('user.articleEdit');
    }
    public function detail()
    {
        return view('main.detail');
    }
    
    public function user()
    {
        return view('user.user');
    }
    public function articleList()
    {
        return view('main.articleList');
    }
    public function viewList()
    {
        return view('main.view');
    }
    public function privacy()
    {
        return view('forms.privacyPolicy');
    }
    


}