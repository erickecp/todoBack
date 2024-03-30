<?php

namespace App\Http\Controllers;
use App\Models\categoria;
use Illuminate\Http\Request;

class categoriaController extends Controller
{
    //
    public function newCategory(Request $r){
        $category = categoria::create($r->all());
        return response()->json($category, 200);
    }
}
