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

            <div class="container comments">
                
                <div class="container comments-input mb-5">
               
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                            </ul>
                        </div>
                    @endif
                    
                    
                    <div class="row">
                        <form  action="{{ route('comment.store', ['post_id' => $post->id]) }}" method="POST">
                            @csrf
                            @method('POST')
                    
                            <div class="form-group">
                              <input type="text" class="form-control" name="name" id="name" 
                                placeholder="Your Name" value="{{ old('name')}}">
                            </div>
            
                            <div class="form-group">
                                <textarea type="text" class="form-control" name="content" id="content" placeholder="Your Comment" value="{{ old('content')}}" rows="3"></textarea>
                            </div>
                        
                            <input type="submit" class="btn btn-info" value="Add Comment">
                    
                        </form>
                    </div>

                </div>

                <div class="comments-list container">
                    <div class="row mb-3"><h2>Comments</h2></div>
                    @forelse($post->comments as $comment)
                    <div class="comments-list--cm row mb-3">

                        <p class="cm-name"> {{ $comment->name }}</p>
                        <p class="cm-content"> {{ $comment->content }}</p>
                        <small class="cm-date"> {{ $comment->created_at }}</small>
                            
                        
                    </div>

                    @empty
                    <div>
                        <p>No comments for this post</p>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>

    </main>

@endsection

