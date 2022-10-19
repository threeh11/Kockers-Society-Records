<?php

namespace App\Http\Controllers;

use App\Actions\StorePhotoAction;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function store(Request $request, StorePhotoAction $storePhoto)
    {
        $storePhoto->store($request);
        return redirect()->route('admin.index');
    }
}
