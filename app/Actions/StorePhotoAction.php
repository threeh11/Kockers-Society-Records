<?php

namespace App\Actions;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StorePhotoAction
{
    public function store(Request $request)
    {
        if ($request->file('image') != null)
        {
            $path = $request->file('image')->storeAs(
                'photos/' . $request->photographer . '/' . $request->date, $request->name . '.jpg'
            );
            DB::table('photos')->insert([
                'photographer' => $request->photographer,
                'area' => $request->area,
                'city' => $request->city,
                'date' => $request->date,
                'pathToPhoto' => "storage/" . $path,
            ]);
        }
    }
}
