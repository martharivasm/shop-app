@extends('layouts.app')
@section('title', 'trainers')
@section('content')

<img style="height: 100px; width: 100px;
background-color: #EFEFEF; margin: 20px;
" class="card-img-top rounded-circle mx-auto d-block"
src="../images/{{$trainer->avatar}}" alt="">

<h5 class="text-center">{{$trainer->name}}</h5>
<h5 class="text-center">{{$trainer->apellido}}</h5>
<h5 class="text-center">{{$trainer->avatar}}</h5>
<div class="text-center">
    <p>Some quick example text token get allbuild on the card title and make up the bulk of the 
        cards content</p>
        <a href="/delete/{{$trainer->id}}" class="btn btn-primary">
            Delete</a>
        <a href="/trainers/{{$trainer->id}}/edit" class="btn btn-secondary">
            Editar</a>
        <a href="{{ route('listado.pdf') }}" class="btn btn-sm btn-primary">
            Descargando Entrenadores en PDF

</a>
</div>

@endsection
