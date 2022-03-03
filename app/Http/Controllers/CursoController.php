<?php

namespace App\Http\Controllers;


use App\Models\Curso;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCurso;
use Illuminate\Support\Facades\Http;

class CursoController extends Controller
{

    public function index(){

        $cursos = Curso::orderBy('id', 'desc')
        ->simplePaginate();
        return view('cursos.index', compact('cursos'));
    }

    public function create(){
        
        return view('cursos.create');
    }

    public function store(StoreCurso $request){

            $curso = Curso::create($request->all());

            return redirect()->route('cursos.show',$curso->id);
        /*$curso = new Curso();

        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;

        $curso->save();*/
    }

    public function show(Curso $curso){

        return view('cursos.show', compact('curso'));
        
    }

    public function edit(Curso $curso){

        return view('cursos.edit',compact('curso'));

    }

    public function update(Request $request, Curso $curso){

        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;
        $curso->url = $request->url;

        $curso->save();

        return redirect()->route('cursos.show',$curso->id);
    }

    public function destroy(Curso $curso){

        $curso->delete();

        return redirect()->route('cursos.index');
    }

}
