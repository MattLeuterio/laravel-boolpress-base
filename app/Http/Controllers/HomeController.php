<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
    
    public function index() {

        $posts = Post::limit(6)->get();
         
        return view('home', compact('posts'));

    }

}
