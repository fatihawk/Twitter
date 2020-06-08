<?php

namespace App\Http\Controllers;

use App\Post;
use App\Image;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $posts = Post::with('likes')->get();
        return view('home',compact('posts'));
    }
}
