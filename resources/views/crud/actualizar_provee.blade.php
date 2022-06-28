@include ('templates.header')


<?php
date_default_timezone_set('America/Monterrey');
$fecha_actual=date("Y-m-d");
date_default_timezone_set('America/Monterrey');
$hora_actual=date("H:i:s");
?>

<form action="{{route ('crud.update_provee', $datosProveedores->id) }}" method="POST" enctype="multipart/form-data">
@csrf
@method("PUT")
<h1 class="text-center">Actualizar Proveedor</h1>


<div class="form-group">
<label for="Fecha">Fecha</label>
<input type="date" class="form-control" name="fecha" value="{{$datosProveedores->fecha}}">
</div>

<div class="form-group">
<label for="Empresa">Nombre Comercial</label>
<input type="text" class="form-control" name="Empresa" value="{{$datosProveedores->Empresa}}">
</div>

<div class="form-group">
<label for="NombreProveedor">Nombre de empleado del proveedor</label>
<input type="text" class="form-control" name="NombreProveedor" value="{{$datosProveedores->NombreProveedor}}">
</div>

<div class="form-group">
<label for="Asunto">Asunto</label>
<input type="text" class="form-control" name="Asunto" value="{{$datosProveedores->Asunto}}">
</div>

<div class="form-group">
<label for="h_entrada">Hora de entrada</label>
<input type="time" class="form-control" name="h_entrada" value="{{$datosProveedores->h_entrada}}">
</div>

<div class="form-group">
<label for="h_salida">Hora de salida</label>
<input type="time" class="form-control" name="h_salida" value="{{$datosProveedores->h_salida}}">
</div>



<div class="col-auto p-5 text-center">
<input class ="btn btn-success" type="submit" center value="Actualizar">
<a class ="btn btn-primary" href="/proveedores"> Volver <a/>
</div>
