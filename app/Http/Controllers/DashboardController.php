<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;

class DashboardController extends Controller
{   
    public function index() {
    $users = User::all();
    $posts = Post::all();

    return view('dashboard')->with('users', $users)->with('posts', $posts);
    }
}
