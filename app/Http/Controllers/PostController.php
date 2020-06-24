<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'body' => 'required'
        ]);

        $data = $request->all();

        // User ID
        $data['user_id'] = 1;

        // generate post slug
        $data['slug'] = Str::slug($data['title'], '-');

        $newPost = New Post();
        $newPost->fill($data);
        
        $saved = $newPost->save();

        if ($saved) {
            // da modificare gestendo lo slug anzichè l'id
            return redirect()->route('post.show', $newPost->slug);

        }



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->first();
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {

        if (empty($post)) {
            abort('404');
        }
        
        $refPost = $post->title;

        //remove related comments
        $post->comments()->delete();

        //remove post
        $hasDeleted = $post->delete();
        
        if($hasDeleted) {
            return redirect()->route('dashboard')->with('postDeleted', $refPost);
        }

        return view('posts.index');
    }
}