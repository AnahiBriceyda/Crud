@extends('layouts.app')
@section('content')

<div class="container">
    <form action="{{route('playeras.update', $datplayera->id)}}" method="post">
@csrf
@method('PUT')

<div class="form-group">
    <label for="talla">Talla</label>
    <input type="tex" class="form-control" id="talla" name="talla" aria- describedby="tallaHelp" value="{{$datplayera->Talla}}">
    <small id="tallaHelp" class="form-text text-muted">Escriba la talla del la playera (chica, mediana o grande).</small>
</div>

<div class="form-group">
    <label for="material">Material</label>
        <input type="text" class="form-control" id="material" name="material" aria- describedby="marcaHelp" value="{{$datplayera->Material}}">
 
        <small id="marcaHelp" class="form-text text- muted">Escriba el material de la playera.</small>
    </div>

    <div class="form-group">
        <label for="color">Color</label>
        <input type="text" class="form-control" id="color" name="color" aria- describedby="colorHelp" value="{{$datplayera->Color}}">
        <small id="colorHelp" class="form-text text- muted">Escriba el color de la blusa.</small>
    </div>
    <button type="submit">Guardar</button>
</form>
@endsection
