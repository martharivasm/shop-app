@section('title', 'Trainers edit')
@section('content')
@csrf

<div class="form-group">
{{!!Form::model($trainer,['route'=>['trainers.update',$trainer],
    'method'=>'PUT','files'=>true]) !!}
@include('form')
{{Form::submit('Actualizar',['clas'=>'btn btn-primary'])}}
!!Form::close()!!
@endsection