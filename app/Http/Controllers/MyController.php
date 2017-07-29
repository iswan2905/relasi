<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OrangTua;
use App\Anak;

class MyController extends Controller
{
    //
    public function index()
    {
    	$a = "Iswan";
    	return "Nama Saya Adalah <b>" .$a."</b>";
    }

    public function tampilan()
    {
    	return view('about');
    }

    public function tampilmodel()
    {
    	$ortu = OrangTua::all();
    	return view('about', compact('ortu'));
    }
}
