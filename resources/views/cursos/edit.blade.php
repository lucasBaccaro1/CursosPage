
@extends('layouts.plantilla')

@section('title','Cursos edit')

@section('content')    
    <main class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="my-5">
                        <form action=" {{route('cursos.update', $curso )}}" method="post" data-sb-form-api-token="API_TOKEN">
                            @csrf
                            @method('put')
                            <div class="form-floating">
                                <input class="form-control" name="name" type="text" placeholder="Ingresa el nombre del curso..." data-sb-validations="required" value=" {{$curso->name}}" />
                                <label for="name">Nombre del curso</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">El nombre del curso es requerido.</div>
                                @error('name')
                                        <small>*{{$message}}</small>
                                        <br>
                                @enderror
                            </div>
                            <div class="form-floating">
                                <input class="form-control" name="categoria" type="text" placeholder="Ingresa categoria..." data-sb-validations="required" value=" {{$curso->categoria}}" />
                                <label for="categoria">Categoria</label>
                                <div class="invalid-feedback" data-sb-feedback="categoria:required">Categoria es requerida.</div>
                                @error('categoria')
                                        <small>*{{$message}}</small>
                                        <br>
                                @enderror
                            </div>
                            <div class="form-floating">
                                <textarea class="form-control" name="descripcion" placeholder="Ingresa descripcion..." style="height: 8rem" data-sb-validations="required ">{{$curso->descripcion}}</textarea>
                                <label for="descripcion">Descripcion</label>
                                <div class="invalid-feedback" data-sb-feedback="descripcion:required">La descripcion es requerida.</div>
                                @error('descripcion')
                                        <small>*{{$message}}</small>
                                        <br>
                                @enderror
                            </div>
                            <br />
                            <div class="form-floating">
                                <input class="form-control" name="url" type="text" placeholder="Ingresa la URL..." data-sb-validations="required" value=" {{$curso->url}}" />
                                <label for="url">URL del curso</label>
                                <div class="invalid-feedback" data-sb-feedback="url:required">La url es requerida.</div>
                                <br>
                            <button class="btn btn-primary" type="submit">Actualizar formulario</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

