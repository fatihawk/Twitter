<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;
use App\PostLikes;
use App\Comment;

class PostController extends Controller
{
    public function show($id)
    {
        $post = Post::with('comments.user', 'comments.')->find($id);
        return view('home', compact('post'));
    }
    public function form($id = null)
    {
        Post::find($id);
        return view('post.form', compact('post'));
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
    public function like($id)
    {
        $like = PostLikes::where('user_id', auth()->user()->id)->where('post_id', $id)->first();
        if (!empty($like)) {
            $like->delete();
        } else {
            PostLikes::create([
                'user_id' => auth()->user()->id,
                'post_id' => $id,
            ]);
        }
        return redirect()->route('home');
    }

    public function my_likes()
    {
        $my_likes = PostLikes::where('user_id', auth()->user()->id)->pluck('post_id');
        $posts = Post::find($my_likes);
        return view('my_likes.show',compact('posts'));
    }
}
