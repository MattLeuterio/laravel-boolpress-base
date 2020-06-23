@extends('layouts.main')

@section('content')
    <main class="main-content">
        
        
        <div class="container">
            <div class="row title-page">
                <h2>All Users</h2>
            </div>
            @foreach ($users as $user)
            <div class="row">
                <section class="user">
                    <div class="user-avatar">
                    <img class="img-fluid" src="{{ $user->info['avatar'] }}" alt="">
                    </div>
                    <div class="user-info">
                        <h2>{{ $user->name }}</h2>
                        <h4>{{ $user->email }}</h4>
                        <h5>{{ $user->info['address'] }}</h5>
                        <h5>{{ $user->info['phone'] }}</h5>

                        <div class="user-posts mt-5">
                            <h3>Posts:</h3>
                            @foreach($user->posts as $post)
                                <ul>
                                    <li>
                                        <a href="{{ route('post.show', $post->id) }}" class="user-posts--title">{{ $post->title }}</a>
                                    </li>
                                </ul>
                            @endforeach
                        </div>

                    </div>
                </section>
            </div>
            @endforeach
        </div>

    </main>

@endsection