@extends('layouts.main')

@section('content')
    <main class="main-content">

        <div class="container">
            <div class="row">
                <h1>New Post</h1>
            </div>
            <div class="row">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>

            <div class="row">
                <form action="{{ route('post.store') }}" method="POST">
                    @csrf
                    @method('POST')
        
                    <div class="form-group">
                      <input type="text" class="form-control" name="title" id="title" 
                        placeholder="Insert Post's Title" value="{{ old('title')}}">
                    </div>

                    <div class="form-group">
                      <input type="text" class="form-control" name="subtitle" id="subtitle" 
                        placeholder="Insert Post's Subtitle" value="{{ old('subtitle')}}">
                    </div>

                    <div class="form-group">
                        <input type="url" class="form-control" name="coverpost" id="coverpost" name="coverpost" placeholder="Insert valid url here">
                    </div>
        
                    <div class="form-group">
                      <textarea class="form-control" name="body" id="body" rows="10"
                        placeholder="Insert Post's Body"></textarea>
                    </div>
                
                    <input type="submit" class="btn btn-info" value="Add Post">
        
                </form>
            </div>
        </div>

    </main>

@endsection

