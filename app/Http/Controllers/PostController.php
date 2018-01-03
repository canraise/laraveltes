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
    public function store(Request $request)
    {
        # isinya
        $this->validate(request(),[
            'title'=>'required|min:3',
            'content'=>'required|min:10',
             'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
$path='images/';

$foto=$request->file('foto');
$filename=str_random(6).'_'.$foto->getClientOriginalName();
$foto->move($path,$filename);

$data = new Post;
$data->foto=$path.$filename;
$data->user_id=$request->input('user_id');
$data->title=$request->input('title');
$data->content=$request->input('content');
$data->category_id=$request->input('category_id');
$data->slug=$request->input(str_slug('title'));
$data->save();
    
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
    // public function update(Post $post){
    //     $post->update([
    //         'title'=>request('title'),
    //         'category_id'=>request('category_id'),
    //         'content'=>request('content'),
    //         'foto'=>request('foto'),

    //     ]);
    //     return redirect()->route('post.index')->withSuccess('Artikel '.request('title').' berhasil diedit');        
    // }


    //fungsi update2
    public function update(Request $request, $id){
$path='images/';

$foto=$request->file('foto');
$filename=str_random(6).'_'.$foto->getClientOriginalName();

Post::find($id)->where($request->all());

    $foto->move($path,$filename);
        return redirect()->route('post.index');        
        
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
