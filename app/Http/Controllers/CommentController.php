<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
    public function save(Request $request){
        Comment::create([
            'user_id'=>auth()->user()->id,
            'post_id'=>$request->post_id,
            'text'=>$request->text,

        ]);
        return redirect()->route('home',[$request->post_id]);
    }
    public function comment_delete($id)
    {
        Comment::destroy($id);
        return redirect()->route('home');
    }
}
