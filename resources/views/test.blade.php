@extends('layouts.formLayout')

@section('title', 'ใในใ')

@section('content')



@foreach($articles as $article)
<p>{{ $article->title }}</p>
<p>{{ $article->user->name }}</p>
@endforeach








@endsection