<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function photos ()
    {
        return view('photos');
    }
    public function music ()
    {
        return view('music');
    }
    public function portfolio ()
    {
        return view('portfolio');
    }
    public function photosArchive ()
    {
        return view('photosArchive');
    }
}
