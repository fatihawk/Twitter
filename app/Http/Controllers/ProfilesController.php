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
        $posts = Post::where('user_id', $user->id)->get();
        $comments = Comment::with('post')->where('user_id', $user->id)->get();
        return view('profiles.show', compact('posts', 'comments','user'));
    }
    public function update_avatar(Request $request, $username)
    {
        if ($request->has('avatar')) {
            $data['avatar'] = "storage/" . $request->avatar->store('public/uploads');
        }
        auth()->user()->update($data);
        return redirect()->route('profiles.show', [$username]);
    }
}
