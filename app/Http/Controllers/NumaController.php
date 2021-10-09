<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NumaController extends Controller
{
    public function add()
    {
        return view('main.index');
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
    public function change()
    {
        return view('user.profileEdit');
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
    public function preview()
    {
        return view('user.articlePreview');
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



}