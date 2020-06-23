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
        </div>

    </main>

@endsection

