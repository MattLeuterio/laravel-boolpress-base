@extends('layouts.main')

@section('content')
    <main class="main-content">
        
        
        <div class="container home">
            <div class="row title-page">
                <h2>Blog - All posts</h2>
            </div>
            <div class="row articles">
                @foreach ($posts as $post)
                <article class="article">
                    <div class="article-image position-relative">
                        <img class="img-fluid" src=" {{ $post->coverpost }} " alt="">
                        <div class="article-body position-absolute">
                            <small>Created at: {{ $post->created_at }}</small>
                            <h3 class="article-body--title"><a href=" {{ route('post.show', $post->slug) }} ">{{ $post->title }}</a></h3>
                        </div>
                    </div>
                </article>
                @endforeach
            </div>
        </div>

    </main>

@endsection

