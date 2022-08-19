@extends('layouts.app')
@section('content')
<div class="container">

<form action="{{url('/mascota/'.$mascota->id_mascota)}}" method="post">
@csrf
{{ method_field('PATCH')}}

@include('mascota.form',['modo'=>'Editar']);

</form>

</div>  
@endsection
