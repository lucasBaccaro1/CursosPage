@extends('layouts.plantilla')

@section('title','Curso'. $curso->name)

@section('content')    
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="post-heading">

                        <div class="card text-center">
                            <div class="card-header">
                                {{$curso->name}}
                            </div>
                            <div class="card-body">
                              <div >
                                <p class="card-title"><span class="meta">{{$curso->descripcion}}</span></p>
                            </div>
                            </div>
                            <div class="card-footer text-muted">
                                <iframe width="560" height="315" src= "{{$curso->url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>

    @can('cursos.edit')
        <div class="d-flex justify-content-center mb-4"><a class="btn btn-primary text-uppercase" href="{{route('cursos.edit',$curso)}}">Editar Curso</a></div>
    @endcan

    @can('cursos.destroy')
    <form action="{{route('cursos.destroy',$curso)}}" method="POST">
        @csrf
        @method('delete')
        <div class="d-flex justify-content-center mb-4">
            <button class="btn btn-primary text-uppercase" type="submit">Eliminar</button>
        </div>
    </form>
    @endcan
    
    <div class="d-flex justify-content-center mb-4"><a class="btn btn-primary text-uppercase" href="{{route('cursos.index')}}">Volver a Cursos</a></div>
@endsection 