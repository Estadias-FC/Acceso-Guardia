@include ('templates.header')
@include ('templates.menu')

<?php
date_default_timezone_set('America/Monterrey');
$fecha_actual=date("Y-m-d");
date_default_timezone_set('America/Monterrey');
$hora_actual=date("H:i:s");
?>

<form action="{{url('proveedores')}}" method="post" enctype="multipart/form-data">
@csrf
<h1 class="text-center">Registro de Proveedores</h1>

<div class="form-group">
<label for="NoEmp">Número de empleado</label>
<input type="int" class="form-control" name="NoEmp">
</div>

<div class="form-group">
<label for="Fecha">Fecha</label>
<input type="date" class="form-control" name="fecha" value="<?= $fecha_actual?>">
</div>

<div class="form-group">
<label for="Empresa">Nombre Comercial</label>
<input type="text" class="form-control" name="Empresa">
</div>

<div class="form-group">
<label for="NombreProveedor">Nombre de empleado del proveedor</label>
<input type="text" class="form-control" name="NombreProveedor">
</div>

<div class="form-group">
<label for="Asunto">Asunto</label>
<input type="text" class="form-control" name="Asunto">
</div>

<div class="form-group">
<label for="h_entrada">Hora de entrada</label>
<input type="time" class="form-control" name="h_entrada" value="<?= $hora_actual?>">
</div>

<div class="form-group">
<label for="h_salida">Hora de salida</label>
<input type="time" class="form-control" name="h_salida">
</div>



<div class="col-auto p-5 text-center">
<input class ="btn btn-success" type="submit" center value="Guardar">
<a class ="btn btn-primary" href="accso"> Volver <a/>
</div>