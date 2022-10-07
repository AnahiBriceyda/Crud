@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{route('playeras.store')}}" method="post">
        
    @csrf
    <div class="form-group">
        <label for="talla">Talla</label>
        <input type="tex" class="form-control" id="talla" name="talla" aria- describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">Escriba la talla del la playera (chica, mediana o grande).</small>
    </div>
    
    <div class="form-group">
        <label for="material">Material</label>
        <input type="text" class="form-control" id="material" name="material" aria- describedby="emailHelp">
        <small id="emailHelp" class="form-text text- muted">Escriba el material de la playera.</small>
    </div>


<div class="form-group">
<label for="color">Color</label>
<input type="text" class="form-control" id="color" name="color" aria- describedby="emailHelp">
<small id="emailHelp" class="form-text text- muted">Escriba el color de la playera.</small>
</div>
<button type="submit">Enviar</button>
</form>
@endsection
