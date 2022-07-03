@include ('templates.header')
@include ('templates.menu')

<?php
date_default_timezone_set('America/Monterrey');
$fecha_actual=date("Y-m-d");
?>
<div class="consulta">
<h1 class="text-center">Consulta de Personal</h1>
<div class="row g-3">
    <div class="col">
        <form action="{{url('consulta')}}" method="get">
            <div class="form-row">
                <div class="col">
                    <input type="text" class="form-control" name="texto" placeholder="N&uacute;mero de Empleado">
                </div>
                <div class="col">
                    <input type="submit" class="btn btn-primary btn-lg" value="Buscar">                
                    <input type="submit" class="btn btn-success btn-lg" value="Mostrar todo"  href="consulta">
                </div>
                
            </div>
        </form>
    </div>

    <div class="card">
    <div style="background-color:#c58845" class="alert alert-primary d-flex" role="alert">
                <div>
                    <h2></h2>
                </div>
            </div>
    <div class="table table-wrapper-scroll-x my-custom-scrollbar">
        <table class="table table table-striped table-hover table-bordered"> 
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
</div>
</div>

  <!----------------------------CSS--------------------->
  <style>
  .consulta{
    margin: 0 auto;
    width: 900px;
    border: 5px #c58845 solid;
    border-radius: 5px;
    padding: 15px;
    
  }

  .card{
    margin: 0 auto;
    width: 900px;
    text-align:center;
    padding: 15px;
  }