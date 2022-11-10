<form class="form-group" method="POST" action="{{action('TrainerController@update',$trainer->id}}" enctype="multipart/form-data" >
    @csrf 
    <div class="form-group">
        <label for="">Nombre:</label>
        <input type="Martha" name="name" value="{{$trainer->name}}" class="form-control">
        <label for="">Apellido:</label>
        <input type="Rivas" name="apellido" value="{{$trainer->apellido}}" class="form-control">
    </div>
    <div clas="form-group">
        <label for="">Avatar:</label>
        <input type="file" name="avatar" value="{{$trainer->avatar}}">
    </div>
    <button type="submit" class="btn btn-primary">
        Editar</button>
</form>




<img style="height: 100px; width: 100px;
background-color: #EFEFEF; margin: 20px;
" class="card-img-top rounded-circle mx-auto d-block"
src="../images/{{$trainer->avatar}}" alt="">

<h5 class="text-center">{{$trainer->name}}</h5>
<h5 class="text-center">{{$trainer->apellido}}</h5>
<div class="text-center">
    <p>Some quick example text token_get_allbuild on the card title and make up the bulk of the 
        card's content.</p>
        <a href="/delete/{{$trainer->id}}" class="btn btn-primary">
            Delete</a>
        <a href="/trainers/{{$trainer->id}}/edit" class="btn btn-secondary">
            Editar</a>
        <a href="{{ route('listado.pdf) }}" class="btn btn-sm btn-primary">
            Descargando Entrenadores en PDF

</a>
</div>

@endsection