<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function home()
    {
        return view("mahasiswa.home"); 
    }

    public function index()
    {
        return "Contoh Tampilan";
    }
        
}