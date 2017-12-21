<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Artikel;
//nanti dihapus kalo udah production
class MainController extends Controller{
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
        $data = User::all();
        return View('article')->with('data', $data);
    }


    //delete edit
    public function destroy($id)
    {
        $hapus = User::find($id);
        $hapus->delete();

        return redirect()->to('/dashboard');
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

        return redirect()->to('/');
    }
}