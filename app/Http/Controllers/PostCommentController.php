<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class PostCommentController extends Controller
{
    public function store(Request $request, Post $post){
//dd($post); bukan ngambil ini
//dd(request('message')); percobaan berhasil langusng bikin save

//cara pertama
// Comment::create([
//     'post_id'=>$post->id,
//     'user_id'=>auth()->id(),
//     'message'=>$request->message,//bisa juga $request->message / request('message')
// ]);
//cara kedua
        $this->validate(request(),[
            'message'=>'required|min:3'
        ]);

$post->comments()->create(array_merge(
                                        $request->only('message'),
                                        ['user_id'=>auth()->id()]
));
return redirect()->back();
    }
    
    //end
}
