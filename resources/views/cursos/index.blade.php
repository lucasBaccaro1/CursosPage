@extends('layouts.plantilla')

@section('title','Cursos')

@section('content')    

    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div>     
                    
            </div>
            <div class="col-md-10 col-lg-8 col-xl-7" >
                <div class="post-preview" >
                    <ul>
                        @foreach ($cursos as $curso)
                            <ul>
                                 <div class="card text-center">
                                    <div class="card-header">
                                        {{$curso->name}}
                                    </div>
                                    <div class="card-body">
                                      <h5 class="card-title"></h5>
                                      <p class="card-text">{{$curso->categoria}}</p>
                                      <a href="{{route('cursos.show', $curso->id)}}" class="btn btn-primary">Ir a curso</a>
                                    </div>
                                    <div class="card-footer text-muted">
                                    </div>
                                  </div>
                                <hr class="my-4" />
                            </ul>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

    </div>
{{$cursos->links()}}
<br>

{{-- 
<script src=" {{asset('vendorJq/jquery.min.js')}} "></script>
<script src=" {{asset('vendorJq/jquery-ui.min.js')}} "></script> --}}
<script>


    // $('#search').autocomplete({
    //     source: function (request,response){
    //         $.ajax({
    //             url: " {{route('search.cursos')}}",
    //             dataType: 'json',
    //             data: {
    //                 term: request.term
    //             },
    //             success
    //         });
    //     }
    // });
    

    // var path=" {{route('search.cursos')}} ";

    // $('input.typeahead').typeahead({
    //     source: function (terms,process){
    //         return $.get (path,{terms:terms},function (data){
    //             return process(data);
    //         });
    //     }
    // });
</script>
 
@endsection