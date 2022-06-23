@include ('templates.header')
@include ('templates.menu')

<?php
date_default_timezone_set('America/Monterrey');
$fecha_actual=date("Y-m-d");
?>

<h1 class="text-center">Consulta de Personal</h1>
<div class="row">
    <div class="col-xl-12">
        <form action="{{url('consulta')}}" method="get">
            <div class="form-row">
                <div class="col-sm-4 my-1">
                    <input type="text" class="form-control" name="texto" placeholder="N&uacute;mero de Empleado">
                </div>
                <div class="col-auto my-1">
                    <input type="submit" class="btn btn-primary" value="Buscar">                
                    <input type="submit" class="btn btn-success" value="Mostrar todo"  href="consulta">
                </div>
                
            </div>
        </form>
    </div>
    <div class="col-xl-12">
        <table class="table col-12"> 
            <thead>
                <tr>
                    <th>Número de empleado</th>
                    <th>Fecha de entrada</th>
                    <th>Hora de entrada</th>
                    <th>Fecha de salida</th>
                    <th>Hora de salida</th>
                </tr>
            </thead>
            <tbody>
            @foreach($consultas as $consulta)
                <tr>
                    <td>{{ $consulta->NoEmp}}</td>
                    <td>{{ $consulta->f_entrada}}</td>
                    <td>{{ $consulta->h_entrada}}</td>
                    <td>{{ $consulta->f_salida}}</td>
                    <td>{{ $consulta->h_salida}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
            <div >
                {{$consultas->links()}}
            </div>
    </div>
        
</div>