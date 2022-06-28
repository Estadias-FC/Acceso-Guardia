@include ('templates.header')
@include ('templates.menu')
<script src="https://kit.fontawesome.com/4f90b872f3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
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
<a class ="btn btn-primary" href="/acceso"> Volver <a/>
</div>



<div class="card">
    <h5 class="card-header"></h5>
    <div class="card-body">
      <h5 class="card-title">Listado de personas en el sistema</h5>
      <p class="card-text">

        <div class="table table-responsive">
            <table class="table table-sm table-bordered">
                <thead>
                    <th>Número de empleado</th>
                    <th>Fecha</th>
                    <th>Nombre Comercial</th>
                    <th>Nombre de empleado del proveedor</th>
                    <th>Asunto</th>
                    <th>Hora de entrada</th>
                    <th>Hora de salida</th>
                    <th>Editar</th>

                </thead>
                <tbody>
                @foreach ($datosProveedores as $item)
                    <tr>
                        <td>{{$item->NoEmp}} </td>
                        <td>{{$item->Fecha}} </td>
                        <td>{{$item->Empresa}} </td>
                        <td>{{$item->NombreProveedor}} </td>
                        <td>{{$item->Asunto}} </td>
                        <td>{{$item->h_entrada}} </td>
                        <td>{{$item->h_salida}} </td>
                        <td>
                            <form action="{{ route ("crud.actualizar_provee", $item->id )}}" method="GET">
                                <button class="btn btn-warning btn-sm">
                                    <span class="fa-solid fa-user-pen"></span>
                                </button>
                            </form>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
      </p>
    </div>
  </div>
