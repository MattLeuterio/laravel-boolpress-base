@extends('layouts.main')

@section('content')
    <main class="main-content">
        
        
        <div class="container">
            <div class="row">
                <article class="single-article">

                    <div class="single-article-header">
                        <small>Created at: {{ $post->created_at }}</small>
                        <h3 class="single-article-header--title">{{ $post->title }}</h3>
                        <p class="single-article-header--author">Author: {{ $post->user['name'] }}</p>
                    </div>
                        
                    <div class="single-article-image mb-4">
                        <img class="img-fluid" src=" {{ $post->coverpost }} " alt="">
                    </div>
                        
                    <div class="single-article-body">
                        <h4 class="single-article-body--subtitle mb-5">{{ $post->subtitle }}</h4>
                        <p class="single-article-body--content">{{ $post->body }}</p>
                    </div>

                    <a class="btn color-main" href="{{ url()->previous() }}">Back</a>

                </article>
            </div>
            <div class="row">

                <div class="comments">

                    <div class="comments-input">
                        input
                    </div>

                    <div class="comments-list">
                        @foreach($post->comments as $comment)

                            <div class="comments-list--cm">

                            <p class="cm-name"> {{ $comment->name }}</p>
                            <p class="cm-content"> {{ $comment->content }}</p>
                            <small class="cm-date"> {{ $comment->created_at }}</small>

                            </div>

                        @endforeach
                    </div>

                </div>

            </div>
        </div>

    </main>

@endsection

