@extends('app')

@section('content')
<div class="container-fluid">
  <p><a href="/validado/fotos/crear-foto?id0{{$id}}" class="btn btn-primary" role="button">Crear Foto</a> </p>
  @if(sizeof($fotos)>0)
    @foreach($fotos as $foto)
    <div class="row">
      <div class="col-sm-6 col-md-12">
          <div class="thumbnail">
            <img src="{{$foto->ruta}}">
              <div class="caption">
                  <h3>{{$foto->nombre}}</h3>
                  <p>{{$foto->descripcion}}</p>
              </div>
          </div>
      </div>
    </div>
    @endforeach
  @else
  <div class="alert alert-danger">
    <p>Al parecer no tienen ninguna foto en este Album. cree UNO!!</p>
  </div>
  @endif
</div>
@endsection
fotos
