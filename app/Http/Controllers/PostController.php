<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Category;

class PostController extends Controller
{
    //fungsi nampilin post
    public function index()
    {
        # code...
//nampilin semua        $posts = Post::all();
            $posts = Post::latest()->paginate(5);//env('PER_PAGE')
            //ngetes pake dd
//dd($posts);
        return view('post.index', compact('posts'));
    }


    //fungsi bikin post
    public function create()
    {
        # isinya
        $categories=Category::all();
        return view('post.create',compact('categories'));
    }
    //fungsi  nyimpen ke database
    public function store()
    {
        # isinya
        $this->validate(request(),[
            'title'=>'required|min:3',
            'content'=>'required|min:10',
        ]);        
        Post::create([
            'title'=>request('title'),
            'slug'=>str_slug(request('title')),
            'content'=>request('content'),
            'category_id'=>request('category_id'),
            'user_id'=>str_slug(request('user_id')),
        ]);
        return redirect()->route('post.index')->withInfo('Artikel berjudul '.request('title').' berhasil ditambahkan');        
    }
    //fungsi edit
    public function edit(Post $post){
//        $post=Post::find($id);
// diganti pake var Post $post dan di route diganti id jadi post
        $categories=Category::all();
        return view('post.edit',compact('post','categories'));

    }

    //fungsi update
    public function update(Post $post){
        $post->update([
            'title'=>request('title'),
            'category_id'=>request('category_id'),
            'content'=>request('content'),

        ]);
        return redirect()->route('post.index')->withSuccess('Artikel '.request('title').' berhasil diedit');        
    }

public function destroy(Post $post){
    $post->delete();

    return redirect()->route('post.index')->withDanger('Artikel sudah dihapus');;

}

    public function show(Post $post){
        return view('post.show',compact('post'));

    }

//endline
}
