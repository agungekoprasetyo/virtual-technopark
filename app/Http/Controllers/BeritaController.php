<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('berita');
    }

    public function kontak()
    {
        return view('kontak');
    }

    public function galeri()
    {
        return view('gallery');
    }

    public function event()
    {
        return view('event');
    }

    public function aplikasi()
    {
        return view('aplikasi');
    }
}
