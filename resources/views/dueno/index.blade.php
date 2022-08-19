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

<a href="{{url('dueno/create')}}" class="btn btn-success"> Registrar nuevo dueño </a>
<br>
<br>


<table class="table table-light">

    <thead class="thead-light">
        <tr>
            
            <th>Rut</th>
            <th>Nombre</th>
            <th>Fecha de Nacimiento</th>
            <th>Direccion</th>
            <th>Correo</th>
            <th>Teléfono</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($duenos as $dueno)
        <tr>
            
            <td>{{ $dueno->rut_dueño }}</td>
            <td>{{ $dueno->nombre_dueño }}</td>
            <td>{{ $dueno->fecha_nacimiento }}</td>
            <td>{{ $dueno->direccion }}</td>
            <td>{{ $dueno->correo }}</td>
            <td>{{ $dueno->telefono}}</td>
            <td>
                
            <a href="{{ url('/dueno/'  .$dueno->rut_dueño.'/edit') }}" class="btn btn-warning" >
                    Editar  
            </a>

             
            <form action="{{ url('/dueno/'.$dueno->rut_dueño) }}" class="d-inline" method="post">
            @csrf 
            {{ method_field('DELETE') }} 
            <input class="btn btn-danger" type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar">
            
            </form> 
            
            

            </td>
        </tr>
        @endforeach

    </tbody>

</table>
{ !! $duenos -> links() !! }
</div>
@endsection