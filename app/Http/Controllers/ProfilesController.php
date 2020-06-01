<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Comment;

class ProfilesController extends Controller
{
    public function show($username)
    {
        $user = User::where('name', $username)->first();
        $posts=Post::where('user_id', $user->id)->get();
        $comments=Comment::where('user_id',$user->id)->get();
        //$reply=Comment::where('post_id',$posts->$user->id)->with('content')->get();
        return view('profiles.show',compact('posts','comments'));
    }

}
