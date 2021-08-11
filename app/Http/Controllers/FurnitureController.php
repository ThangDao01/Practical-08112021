<?php

namespace App\Http\Controllers;

use App\Furniture;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class FurnitureController extends Controller
{
    public function save(Request $request)
    {
        $obj = new Furniture();
        $obj->code = $request->get('code');
        $obj->name = $request->get('name');
        $obj->price = $request->get('price');
        $obj->avatar = $request->get('code');
        $obj->created_at = Carbon::now();
        $obj->updated_at = Carbon::now();
        $obj->save();
    }

    public function show()
    {
        $obj = Furniture::all();
        return $obj;
    }
}
