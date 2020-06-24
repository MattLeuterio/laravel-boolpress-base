@extends('layouts.main')

@section('content')
    <main class="main-content">

        <section class="dashboard">

            <div class="dashboard-ctn">
                
                <div class="container">
                    @if(session('deleted'))
                        <div class="row deleted alert alert-success">
                            {{ session('deleted') }}
                        </div>
                    @endif
            
                    <div class="row title-and-cta">
                        <h1>Users</h1>
                        <a class="btn btn-sm show btn-secondary" href="{{ route('user.create') }}">Add User</a>
                    </div>
            
                    <div class="row users-table mt-4">
                        <table class="table table-hover">
                            <thead>
                              <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                              </tr>
                            </thead>
                                <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td><a class="btn btn-info" href="{{ route('user.show', $user->id) }}">Show</a></td>
                                    <td><a class="btn btn-success"href="{{ route('user.edit', $user->id) }}">Update</a></td>
                                    <td>
                                        <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input class="btn btn-danger" type="submit" value='Delete'>
                                        </form>
                                    </td>
                                </tr>
                                 @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

            <div class="dashboard-ctn">
                
                <div class="container">
                    @if(session('deleted'))
                        <div class="row deleted alert alert-success">
                            {{ session('deleted') }}
                        </div>
                    @endif
            
                    <div class="row title-and-cta">
                        <h1>Posts</h1>
                        <a class="btn btn-sm btn-secondary" href="{{ route('post.create') }}">Add Post</a>
                    </div>
            
                    <div class="row posts-table mt-4">
                        <table class="table table-hover">
                            <thead>
                              <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Title</th>
                                <th scope="col">Created</th>
                                <th scope="col">Updated</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                              </tr>
                            </thead>
                                <tbody>
                                @foreach($posts as $post)
                                <tr>
                                    <td>{{ $post->id }}</td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->created_at }}</td>
                                    <td>{{ $post->updated_at }}</td>
                                    <td><a class="btn btn-info" href="{{ route('post.show', $post->slug) }}">Show</a></td>
                                    <td><a class="btn btn-success"href="{{ route('post.edit', $post->id) }}">Update</a></td>
                                    <td>
                                        <form action="{{ route('post.destroy', $post->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input class="btn btn-danger" type="submit" value='Delete'>
                                        </form>
                                    </td>
                                </tr>
                                 @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

        </section>



    
    </main>

@endsection

