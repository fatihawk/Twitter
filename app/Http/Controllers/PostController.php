<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;
use App\PostLikes;
use App\Comment;
use App\MyImages;
use Spatie\Searchable\Search;

class PostController extends Controller
{
    public function show($id)
    {
        $post = Post::with('comments.user', 'comments.')->find($id);
        return view('home', compact('post'));
    }
    public function form($id = null)
    {
        $post = Post::find($id);
        return view('post.form', compact('post'));
    }
    public function save(Request $request)
    {

        $data = ['content' => $request->content];
        if ($request->has('image')) {
            $data['image'] = "storage/" . $request->image->store('public/images');
        }
        if ($request->has('video')) {
            $data['video'] = "storage/" . $request->video->store('public/videos');
        }
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
        return view('my_likes.show', compact('posts'));
    }
    public function my_images()
    {
        $my_images = Post::where('user_id', auth()->user()->id)->get();
        return view('my_images.show', compact('my_images'));
    }

    public function search(Request $request)
    {
        $searchResults = (new Search())
            ->registerModel(Post::class, 'content')
            ->perform($request->input('query'));

        return view('search', compact('searchResults'));
    }


}
