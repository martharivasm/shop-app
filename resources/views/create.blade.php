@extends('layouts.app')
@section('title', 'Trainers create')
@section('content')

{!! Form::open(['route'=>'trainers.store','method'=>'POST','files'=>'true']) !!}
@include('form')
{{Form::submit('Guardar',['class'=>'btn btn-primary'])}}
{!!Form::close()!!}

@endsection 
