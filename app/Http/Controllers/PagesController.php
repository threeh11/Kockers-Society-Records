<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function photos()
    {
        $photos = DB::table('photos')->get();
        return view('photos', ['photos' => $photos]);
    }

    public function music()
    {
        return view('music');
    }

    public function portfolio()
    {
        return view('portfolio');
    }

    public function photosArchive()
    {
        return view('photosArchive');
    }
}
