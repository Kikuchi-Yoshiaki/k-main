@extends('layouts.formLayout')

@section('title', '風景写真投稿ページ')

@section('content')

    
    <div class="container form-container">
        <div class="wrapper">
            <form action="{{ action('ViewController@create') }}" method="POST" name="view-post" class="user-box" enctype="multipart/form-data">
                <h3 class="form-title mb-4 mt-3">風景・画像を投稿する</h3>
                
                <!-- 画像選択 -->
                <div class="mb-4">
                    <label class="form-label mb-2 mr-1">画像選択</label>
                    <span class="text-danger small">※必須</span>
                    <input type="file" id="edit-view-image" class="form-control-file @error('view_image') is-invalid @enderror" name="view_image" autofocus="">
                    
                    <!-- 画像未選択エラー -->
                    @error('view_image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <button type="button" id="cancel-view" class="mt-2" onclick="this.form.elements['view_image'].value=''">画像取り消し</button>
                    <!-- ファイル画像を表示 -->
                    <img src="" id="view-preview" class="img-responsive">
                </div>

                <!-- タイトル -->
                <div class="mb-5 mt-3">
                    <label class="form-label mr-1">画像のタイトル名</label>
                    <span class="text-secondary small">※任意</span>
                    <input type="text" class="form-control" name="title" placeholder="写真のタイトル" autofocus="">
                </div>
                
                <!-- ユーザーIDを登録 -->
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                <!-- 登録ボタン -->
                <div class="input-box">
                    <button type="submit" class="btn-flat-vertical-border my-5 p-2 col-5">プライバシーポリシー<br>に同意して投稿する</button>
                    {{ csrf_field() }}
                </div>

                <a class="goto-top d-block mb-3" href="{{ url('/') }}">トップページに戻る</a>

            </form>
        </div>
    </div>

@endsection