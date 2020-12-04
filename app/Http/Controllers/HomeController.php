<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Post;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('post_date', 'DESC')->get();

        return view('home', [
            'posts' => $posts
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
