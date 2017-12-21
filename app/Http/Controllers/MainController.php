<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
//nanti dihapus kalo udah production
class MainController extends Controller{
    public function tes(){
        $data = User::all();
        return View('tes')->with('data', $data);
    }
    public function dashboard(){
        $data = User::all();
        return View('dashboard')->with('data', $data);
    }
    public function article(){
        return View('article');
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