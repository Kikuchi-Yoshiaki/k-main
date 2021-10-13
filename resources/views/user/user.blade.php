@extends('layouts.mainLayout')

@section('title', 'ユーザーページ')

@section('content')

    <!-- 全体の枠 -->
    <div class="container-fluid">
        <div class="row justify-content-center">

            {{-- 左側コンテンツ --}}
            <div class="col-lg-9 col-md-12">
                
            <!-- MyProfile -->
            <div class="my-profile-box col-sm-9">
                <h3 class="my-profile">ユーザーページ</h3>
                <p class="float-right mt-2 mr-5">最新投稿日：</p>
                <div class="my-profile-img">
                    @if(isset($user->profile_image))
                    <img  src="{{ asset('storage/profile/'.$user['profile_image'] ) }}" name="profile-image">
                    @else
                    <img src="/assets/images/noimage.png" name="no-profile-image">
                    @endif
                    <span class="my-profile-name">{{ $user->name }}さんのページ</span>
                </div>
                <a class="post-btn float-right mr-5" href="/user/edit/profile?id={{ $user->id }}" type="button">プロフィールを変更する</a>
            </div>

            <!--My記事一覧 -->
            <h3 class="col-lg-9 col-md-9 md-ml-5  col-sm-5 headline-top">{{ $user->name }}さんの記事一覧</h3>
            
            <div class="d-flex flex-wrap justify-content-around mb-5">
                    <!--foreach-->
                    <div class="card col-lg-5 col-md-10 next-news">
                        <img class="card-img-next" src="{{-- asset('storage/article/'.$post['main_image'] ) --}}">
                        <!--if $post->category == "気仙沼の遊ぶ")
                        <div class="tags1">
                            <span>{ $post->category }}</span>
                        </div>
                        elseif $post->category == "気仙沼の食べる")
                        <div class="tags2">
                            <span>{ $post->category }}</span>
                        </div>
                        else
                        <div class="tags3">
                            <span>{ $post->category }}</span>
                        </div>
                        endif-->
                        <div class="card-body">
                            <h4 class="card-title next-title">{{-- $post->title --}}</h4>
                            
                            <div class="next-news-date d-inline"><i class="far fa-calendar-alt mr-2"></i>{{-- $top->created_at->format('Y年m月d日') --}}</div>
                            <p class="card-text next-text">{{-- $post->body --}}</p>
                            <a class="float-right" href="/article/detail/?id={{-- $post->id --}}">続きを読む</a>
                        </div>
                        <div class="btn-group-sm" role="group" aria-label="Basic example">
                            <a class="btn btn-primary" href="{{ url('/user/edit/article') }}">記事を編集</a>
                            <a class="btn btn-danger" href="">記事を削除</a>
                        </div>
                    </div>
                    <!--endforeach-->
                </div>

            <a class="main-btn btn d-block mx-auto mt-3 more d-none p-3" type="button" href="article/index">記事一覧<br>を見る</a>



            <!-- My写真一覧 -->
            <h3 class="col-lg-9 col-md-9 md-ml-5 col-sm-5 headline-view">{{ $user->name }}さんの風景一覧</h3>

            <div class="d-flex flex-wrap justify-content-around">
                <!--foreach $views as $view)-->
                <a class="card view-list mb-1 text-center" href="{{-- asset('storage/view/'.$view['view_image'] ) --}}" target="_blank">
                    <img class="card-img-top" src="{{-- asset('storage/view/'.$view['view_image'] ) --}}">
                    <!--if isset$view->title-->
                    <p class="card-title">{{-- Str::limit($view->title,20) --}}</p>
                    <!--else
                    <span></span>
                    endif-->
                    <form action="{{-- action('UserController@delete', ['id' => $user->id]) --}}" method="POST">
                        {{ csrf_field() }}
                        <input type="submit" value="削除">
                    </form>
                </a>
                <!--endforeach-->
            </div>
            <a class="main-btn btn d-block mx-auto mt-3 p-3" type="button" href="{{ url('article/view') }}
            ">風景一覧<br>を見る</a>
        </div>


            
@endsection

@section('footer')
