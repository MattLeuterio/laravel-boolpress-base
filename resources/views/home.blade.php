@extends('layouts.main')

@section('content')
    <main class="main-content">
        
        
        <div class="container">
            <div class="row title-page">
                <h2>Latest Posts</h2>
            </div>
            <div class="row">
                @foreach ($posts as $post)
                <article class="article">
                    <div class="article-image mb-4">
                        <img class="img-fluid" src=" {{ $post->coverpost }} " alt="">
                    </div>
                    <div class="article-body">
                        <small>Created at: {{ $post->created_at }}</small>
                        <h3 class="article-body--title">{{ $post->title }}</h3>
                        <h4 class="article-body--subtitle">{{ $post->subtitle }}</h4>
                        <p class="article-body--author">Author: {{ $post->user['name'] }}</è>
                        <p class="article-body--content">{{ $post->body }}</p>
                    </div>
                </article>
                @endforeach
            </div>
        </div>

    </main>

@endsection

