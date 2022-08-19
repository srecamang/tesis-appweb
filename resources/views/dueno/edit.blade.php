@extends('layouts.app')
@section('content')
<div class="container">

<form action="{{url('/dueno/'.$dueno->rut_dueño)}}" method="post">
@csrf
{{ method_field('PATCH')}}

@include('dueno.form',['modo'=>'Editar']);

</form>

</div>  
@endsection