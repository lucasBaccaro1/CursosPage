<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class SearchController extends Controller
{
    public function autocomplete(Request $request){
        $datas = Curso::select("name")
                    ->where("name","LIKE","%{$request->terms}%")
                    ->get();

        return response()->json($datas);
    }
}
