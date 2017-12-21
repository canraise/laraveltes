<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
//nanti dihapus kalo udah production
class MainController extends Controller{
    public function tes(){
        return View('tes');
    }
    public function dashboard(){
        $data = User::all();
        return View('dashboard')->with('data', $data);
    }
    public function article(){
        return View('article');
    }
}