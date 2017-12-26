<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Artikel;

class HomeController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index(Request $request)
  {
    $request->user()->authorizeRoles(['employee', 'manager']);
        $data = User::all();
        $artikelnya = Artikel::all();
        return View('home',['data'=>$data,'artikelnya'=>$artikelnya]);
  }

  /*
  public function someAdminStuff(Request $request)
  {
    $request->user()->authorizeRoles('manager');

    return view('some.view');
  }
  */
    // public function tes(){
    //     $data = User::all();
    //     return View('tes')->with('data', $data);
    // }
    public function tes(){
        $data = User::all();
        $artikelnya = Artikel::all();
        return View('tes',['data'=>$data,'artikelnya'=>$artikelnya]);
    }
    public function dashboard(){
        $data = User::all();
        return View('dashboard')->with('data', $data);
    }
    public function article(){
        $data = Artikel::all();
        return View('article')->with('data', $data);
    }

    //delete edit
    public function destroy($id)
    {
        $hapus = User::find($id);
        $hapus->delete();

        return redirect()->to('/home');
    }
    public function edit($id)
    {
        $tampiledit = User::where('id', $id)->first();
        return view('edit')->with('tampiledit', $tampiledit);
    }
    public function update(Request $request, $id)
    {
        $update = User::where('id', $id)->first();
        $update->name = $request['name'];
        $update->email = $request['email'];
        $update->update();

        return redirect()->to('/home');
    }

//artikel
       public function create(array $artikelnya)
    {
$artikel = Artikel::create([
      'judul'     => $artikelnya['judul'],
      'konten'    => $artikelnya['konten'],
    ]);
    return $artikel;    
}


//ayo tambah controller lagi
  }