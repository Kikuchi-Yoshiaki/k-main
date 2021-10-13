<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;


class UserController extends Controller
{

    //ユーザー情報を登録してメッセージページに移動する
    public function create(Request $request)
    {
        $users = new User;
        $form = $request->all();
        
        if (isset($form['profile_image'])) {
            $path = $request->file('profile_image')->store('public/profile');
            $users->profile_image = basename($path);
        } else {
            $users->profile_image = null;
        }
        
        unset($form['_token']);
        unset($form['profile_image']);
        
        $users->fill($form);
        $users->save();

        return redirect('/forms/message')
            ->with('title', 'ありがとうございます！')
            ->with('message', 'ユーザー登録が完了しました。記事や画像の投稿ができます。')
            ->with('message2', '投稿内容はユーザーページから閲覧・編集・削除ができます。');
    }
    
    
    
    //ユーザー情報を表示
    public function userIndex(Request $request)
    {
        $user = User::find($request->id); 
     
        return view('user.user', ['user' => $user]);
    }
    
    
    //ユーザー情報を取得する
    public function edit(Request $request)
    {
        $user = User::find($request->id);
    
        return view('user.profileEdit', ['form' => $user]);
    }
    
    
    //プロフィール更新
    public function update(Request $request)
    {
        $user = User::find($request->id);
        $form = $request->all();
        
        if (isset($form['profile_image'])) {
            $path = $request->file('profile_image')->store('public/profile');
            $user->profile_image = basename($path);
        } else {
            $user->profile_image = null;
        }
        
        unset($form['profile_image']);
        unset($form['_token']);
        
        $user->fill($form)->save();
        
        return redirect('forms/message')
            ->with('title', '更新完了！')
            ->with('message', 'ユーザー情報が更新されました。');
    }
    
}
