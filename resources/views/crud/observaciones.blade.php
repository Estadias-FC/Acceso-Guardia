@include ('templates.header')
@include ('templates.menu')

<?php
date_default_timezone_set('America/Monterrey');
$fecha_actual=date("Y-m-d");
date_default_timezone_set('America/Monterrey');
$hora_actual=date("H:i:s");
?>

<form action="{{url('observaciones')}}" method="post" enctype="multipart/form-data">
@csrf
<h1 class="text-center">Registro de Observaciones</h1>

<div class="form-group">
<label for="Fecha de entrada">Número de empleado</label>
<input type="text" class="form-control" name="numempleado">
</div>

<div class="form-group">
<label for="Fecha de entrada">Fecha</label>
<input type="date" class="form-control" name="Fecha" value="<?= $fecha_actual?>">
</div>

<div class="form-group">
<label for="Fecha de entrada">Hora</label>
<input type="time" class="form-control" name="hora" value="<?= $hora_actual?>">
</div>

<div class="form-group">
<label for="Fecha de entrada">Observaciones</label>
<input type="text" class="form-control" name="comentarios">
</div>


<div class="col-auto p-5 text-center">
<input class ="btn btn-success" type="submit" center value="Guardar">
<a class ="btn btn-primary" href="accso"> Volver <a/>
</div>