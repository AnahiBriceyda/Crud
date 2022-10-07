@extends('layouts.app')

@section('content')
 <div class="container">
   <table class="table table-light">
      <thead class="thead-light">
        <a class= "btn btn-success" href="{{route('playeras.create')}}">Insertar Playera</a>
        <table class= "table table-light">
            <thead class= "thead-light">
                <tr>
            <th>id</th>
            <th>Talla</th>
            <th>Material</th>
            <th>Color</th>
            <th colspan="2">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($playeras as $playera)
<tr>
    <td>{{$playera->id}}</td>
    <td>{{$playera->Talla}}</td>
    <td>{{$playera->Material}}</td>
    <td>{{$playera->Color}}</td>
    <td>
        <form action="{{route('playeras.edit', $playera->id)}}" method= "post">
        @csrf
        @method('GET')
        <button class="btn btn-success" href=>Editar</td>
    </form>
    <td>
        <form action="{{route('playeras.destroy', $playera->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button class= "btn btn-danger" type="submit" onclick= "return confirm ('¿Desea eliminar estos datos?')">Eliminar</button>
 
</form>
</td>

</tr>
 
@endforeach

</tbody>
</table>
</div>
@endsection
