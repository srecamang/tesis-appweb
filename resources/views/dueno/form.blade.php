
<br>
<!-- 
<label for="id_mascota"> Rut </label>
<input type="text" name="id_mascota" id="id_mascota">
<br>
-->
<h1>{{$modo}} dueno</h1>

@if(count($errors)>0)

    <div class="alert alert-danger" role="alert">
<ul>
         @foreach($errors->all() as $error)
        <li> {{$error}} </li>
    @endforeach
</ul>
    </div>

    

@endif

<div class="form-group">
<label for="rut_dueño"> Rut </label>
<input type="text" class="form-control" name="rut_dueño"
 value="{{isset($dueno->rut_dueño)?$dueno->rut_dueño:old('rut_dueño')}}" id="rut_dueño">
 </div>

<div class="form-group">
<label for="nombre_dueño"> Nombre </label>
<input type="text" class="form-control" name="nombre_dueño"
 value="{{isset($dueno->nombre_dueño)?$dueno->nombre_dueño:old('nombre_dueño')}}"  id="nombre_dueño">
</div>

<div class="form-group">
<label for="fecha_nacimiento"> Fecha de nacimiento </label>
<input type="date" class="form-control" name="fecha_nacimiento"
 value="{{isset($dueno->fecha_nacimiento)?$dueno->fecha_nacimiento:old('fecha_nacimiento')}}" id="fecha_nacimiento">
</div>

<div class="form-group">
<label for="direccion"> Dirección </label>
<input type="text" class="form-control" name="direccion" 
value="{{isset($dueno->direccion)?$dueno->direccion:old('direccion')}}" id="direccion">
</div>

<div class="form-group">
<label for="correo"> Correo </label>
<input type="text" class="form-control" name="correo" 
value="{{isset($dueno->correo)?$dueno->correo:old('correo')}}" id="correo">
</div>

<div class="form-group">
<label for="telefono"> Teléfono </label>
<input type="text" class="form-control" name="telefono" 
value="{{isset($dueno->telefono)?$dueno->telefono:old('telefono')}}" id="telefono">
</div>
<br>

<input class="btn btn-success" type="submit" value="{{$modo}} Datos">

<a class= "btn btn-primary" href="{{url('dueno/')}}">Regresar</a>

<br>

</form>