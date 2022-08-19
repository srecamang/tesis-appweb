
<br>
<!-- 
<label for="id_mascota"> Rut </label>
<input type="text" name="id_mascota" id="id_mascota">
<br>
-->
<h1>{{$modo}} mascota </h1>

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
<label for="nombre_mascota"> Nombre </label>
<input type="text" class="form-control" name="nombre_mascota"
 value="{{isset($mascota->nombre_mascota)?$mascota->nombre_mascota:old('nombre_mascota')}}" id="nombre_mascota">
</div>

<div class="form-group">
<label for="especie"> Especie </label>
<input type="text" class="form-control"  name="especie"
 value="{{isset($mascota->especie)?$mascota->especie:old('especie')}}" id="especie">
</div>

<div class="form-group">
<label for="raza"> Raza </label>
<input type="text" class="form-control" name="raza"
 value="{{isset($mascota->raza)?$mascota->raza:old('raza')}}" id="raza">
</div>

<div class="form-group">
<label for="sexo"> Sexo </label>
<input type="text" class="form-control" name="sexo"
 value="{{isset($mascota->sexo)?$mascota->sexo:old('sexo')}}" id="sexo">
</div>

<div class="form-group">
<label for="edad"> Edad </label>
<input type="text" class="form-control" name="edad"
 value="{{isset($mascota->edad)?$mascota->edad:old('edad')}}" id="edad">
</div>

<div class="form-group">
<label for="peso"> Peso </label>
<input type="text" class="form-control" name="peso"
 value="{{isset($mascota->peso)?$mascota->peso:old('peso')}}" id="peso">
</div>

<div class="form-group">
<label for="esterilizado"> Esterilizado </label>
<input type="text" class="form-control" name="esterilizado"
 value="{{isset($mascota->esterilizado)?$mascota->esterilizado:old('esterilizado')}}" id="esterilizado">
</div>

<div class="form-group">
<label for="num_chip"> Número de chip </label>
<input type="text" class="form-control" name="num_chip"
 value="{{isset($mascota->num_chip)?$mascota->num_chip:old('num_chip')}}" id="num_chip">
</div>

<div class="form-group">
<label for="dueño_rut_dueno"> Rut Dueño </label>
<input type="text" class="form-control" name="dueño_rut_dueño"
 value="{{isset($mascota->dueño_rut_dueño)?$mascota->dueño_rut_dueño:old('dueño_rut_dueño')}}" id="dueño_rut_dueño">
</div>
<br>

<input class="btn btn-success" type="submit" value="{{$modo}} Datos">

<a class= "btn btn-primary" href="{{url('mascota/')}}">Regresar</a>

<br>

</form>