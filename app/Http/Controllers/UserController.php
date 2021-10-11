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
            $path = $request->file('profile_image')->store('public/image');
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
            ->with('message2', '投稿内容はユーザーページから閲覧・編集・削除ができます。');;
            
    }
}
