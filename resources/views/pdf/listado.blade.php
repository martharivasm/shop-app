@extends('layouts.pdfinicio')
@section('content')

<table class="table table-hover table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Apellido</th>
            <th>Avatar</th>
</tr>
</thead>
<tbody>
    @foreach($trainers as $trainer)
    <tr>
        <td>{{ $trainer->id}}</td>
        <td>{{ $trainer->name}}</td>
        <td>{{ $trainer->apellido}}</td>
        <td class="text-right">{{ $trainer->avatar}}</td>
</tr>
@endforeach
</tbody>
</table>
@endsection