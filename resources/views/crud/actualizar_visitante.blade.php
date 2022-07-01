@include ('templates.header')


<?php
date_default_timezone_set('America/Monterrey');
$fecha_actual=date("Y-m-d");
date_default_timezone_set('America/Monterrey');
$hora_actual=date("H:i:s");
?>

<form action="{{route ('crud.update_visita', $datosVisitantes->id) }}" method="POST" enctype="multipart/form-data">
@csrf
@method("PUT")
<h1 class="text-center">Actualizar Visitante</h1>


<div class="form-group">
<label for="Empresa">Fecha</label>
<input type="date" class="form-control" name="Fecha" value="{{$datosVisitantes->Fecha}}">
</div>


<div class="form-group">
<label for="Empresa">Nombre del visitante</label>
<input type="text" class="form-control" name="Nombre" value="{{$datosVisitantes->Nombre}}">
</div>

<div class="form-group">
<label for="NombreProveedor">Apellido Paterno</label>
<input type="text" class="form-control" name="ApellidoPaterno" value="{{$datosVisitantes->ApellidoPaterno}}">
</div>

<div class="form-group">
<label for="Asunto">Apellido Materno</label>
<input type="text" class="form-control" name="ApellidoMaterno" value="{{$datosVisitantes->ApellidoMaterno}}">
</div>

<div class="form-group">
<label for="h_entrada">Asunto</label>
<input type="text" class="form-control" name="Asunto" value="{{$datosVisitantes->Asunto}}">
</div>

<div class="form-group">
<label for="h_salida">Identidicacion</label>
<input type="text" class="form-control" name="Identificacion" value="{{$datosVisitantes->Identificacion}}">
</div>

<div class="form-group">
    <label for="h_salida">Hora de entrada</label>
    <input type="time" class="form-control" name="h_entrada" value="{{$datosVisitantes->h_entrada}}">
    </div>

<div class="form-group">
    <label for="h_salida">Hora de salida</label>
    <input type="time" class="form-control" name="h_salida" value="{{$datosVisitantes->h_salida}}">
    </div>

<div class="col-auto p-5 text-center">
<input class ="btn btn-success" type="submit" center value="Actualizar">
<a class ="btn btn-primary" href="/visitantes"> Volver <a/>
</div>