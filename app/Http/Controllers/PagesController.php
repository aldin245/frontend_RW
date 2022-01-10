<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function sejarah()
    {
        return view('sejarah');
    }

    public function login()
    {
        return view('login');
    }

    public function index()
    {
        return view('index');
    }

    public function kegiatan()
    {
        return view('kegiatan');
    }

    public function struktur()
    {
        return view('struktur');
    }

    public function surat()
    {
        return view('surat');
    }
}


