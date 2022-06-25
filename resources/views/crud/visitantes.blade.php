@include ('templates.header')
@include ('templates.menu')

<?php
date_default_timezone_set('America/Monterrey');
$fecha_actual=date("Y-m-d");
date_default_timezone_set('America/Monterrey');
$hora_actual=date("H:i:s");
?>

<form action="{{url('visitantes')}}" method="post" enctype="multipart/form-data">
@csrf
<h1 class="text-center">Registro de Visitantes</h1>

<div class="form-group">
<label for="NoEmp">Número de empleado</label>
<input type="int" class="form-control" name="NoEmp">
</div>

<div class="form-group">
<label for="Fecha">Fecha</label>
<input type="date" class="form-control" name="Fecha" value="<?= $fecha_actual?>">
</div>

<div class="form-group">
<label for="Nombre">Nombre</label>
<input type="text" class="form-control" name="Nombre">
</div>

<div class="form-group">
<label for="ApellidoPaterno">Apellido Paterno</label>
<input type="text" class="form-control" name="ApellidoPaterno">
</div>

<div class="form-group">
<label for="ApellidoMaterno">Apellido Materno</label>
<input type="text" class="form-control" name="ApellidoMaterno">
</div>

<div class="form-group">
<label for="Asunto">Asunto</label>
<input type="text" class="form-control" name="Asunto">
</div>

<div class="form-group">
<label for="Identificacion">Identificación Oficial (CIC)</label>
<input type="text" class="form-control" name="Identificacion">
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
