<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
   public function form($id = null)
    {
        Post::find($id);
        return view('post.form',compact('post'));
    }
    public function save(Request $request)
    {
        $data = ['content' => $request->content];
        if ($request->has('id')) {
            auth()->user()->posts()->find($request->id)->update($data);
        } else {
            auth()->user()->posts()->create($data);
        }
        return redirect()->route('home');
    }
    public function delete($id)
    {
        Post::destroy($id);
        return redirect()->route('home');
    }
}
