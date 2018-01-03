<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class PostCommentController extends Controller
{
    public function store(Request $request){//yang sebelum ajax tambah $request , Post $post
//dd($post); bukan ngambil ini
//dd(request('message')); percobaan berhasil langusng bikin save

//cara pertama
// Comment::create([
//     'post_id'=>$post->id,
//     'user_id'=>auth()->id(),
//     'message'=>$request->message,//bisa juga $request->message / request('message')
// ]);
//cara kedua

//work sebelum json
//         $this->validate(request(),[
//             'message'=>'required|min:3'
//         ]);

// $post->comments()->create(array_merge(
//                                         $request->only('message'),
//                                         ['user_id'=>auth()->id()]
// ));
// return redirect()->back();
//     }

//json ajax
$post=new Comment();
$post->post_id= $request->post_id;
$post->user_id= $request->user_id;
$post->message= $request->message;
$post->save();
//return response()->json($post); error manggil jadi pake redirrect back tp data udah masuk via ajax
return redirect()->back();
    //end
}
}