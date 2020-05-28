<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class ProfilesController extends Controller
{
    public function show($username)
    {
        $user = User::where('name', $username)->first();
        $posts=Post::where('user_id', $user->id)->get();
        return view('profiles.show',compact('posts'));
    }

}
