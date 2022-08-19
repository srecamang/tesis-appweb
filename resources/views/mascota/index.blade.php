@extends('layouts.app')
@section('content')
<div class="container">




@if(Session::has('mensaje'))
<div class="alert alert-success alert-dismissible" role="alert">
{{Session::get('mensaje')}}
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
 </button>
 </div>
@endif
<!-- </div>-->

<a href="{{url('mascota/create')}}" class="btn btn-success"> Registrar nueva mascota </a>
<br>
<br>
<table class="table table-light">

    <thead class="thead-light">
        <tr>
            
            <th>ID</th>
            <th>Nombre</th>
            <th>Especie</th>
            <th>Raza</th>
            <th>Sexo</th>
            <th>Edad</th>
            <th>Peso</th>
            <th>Esterilizado</th>
            <th>N° de chip</th>
            <th>Rut dueño</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($mascotas as $mascota)
        <tr>
            
            <td>{{ $mascota->id_mascota }}</td>
            <td>{{ $mascota->nombre_mascota }}</td>
            <td>{{ $mascota->especie }}</td>
            <td>{{ $mascota->raza }}</td>
            <td>{{ $mascota->sexo }}</td>
            <td>{{ $mascota->edad}}</td>
            <td>{{ $mascota->peso}}</td>
            <td>{{ $mascota->esterilizado}}</td>
            <td>{{ $mascota->num_chip}}</td>
            <td>{{ $mascota->dueño_rut_dueño}}</td>
            
            <td>
                
            <a href="{{ url('/mascota/'  .$mascota->id_mascota.'/edit') }}" class="btn btn-warning" >
                    Editar  
            </a>

             
            <form action="{{ url('/mascota/'.$mascota->id_mascota) }}" class="d-inline" method="post">
            @csrf 
            {{ method_field('DELETE') }} 
            <input class="btn btn-danger" type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar">
            
            </form> 
            
            

            </td>
        </tr>
        @endforeach

    </tbody>

</table>
{ !! $mascotas -> links() !! }
</div>
@endsection