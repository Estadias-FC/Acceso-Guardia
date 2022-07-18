


@include ('templates.header')
@include ('templates.menu')




<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<link href="https://nightly.datatables.net/css/jquery.dataTables.css" rel="stylesheet" type="text/css" />

<?php
date_default_timezone_set('America/Monterrey');
$fecha_actual=date("Y-m-d");
?>
<div class="consulta">
<h1 class="text-center">Consulta de Empleados</h1>
<div class="row g-3">
    <div class="col">
        <form action="{{url('consulta')}}" method="get">
            {{-- <div class="form-row">
                <div class="col">
                    <input type="text" class="form-control" name="texto" placeholder="N&uacute;mero de Empleado"required>
                </div>
                <div class="col">
                    <input type="submit" class="btn btn-primary btn-lg" value="Buscar">
                    <input type="submit" class="btn btn-success btn-lg" value="Mostrar todo"  href="consulta">
                </div>

            </div> --}}
        </form>
    </div>

    <p>
        <input class="form-control"type="text" placeholder="Buscar..." id="mySearch">
      </p>

    <div class="card1">
    <div style="background-color:#c58845" class="alert alert-primary d-flex" role="alert">
                <div>
                    <h2></h2>
                </div>
            </div>


<div class="container">
    <div class="table table-wrapper-scroll-x my-custom-scrollbar">
        <table id="exportable" class="display nowrap mytables1 table-responsive" style="width:100%">
            <thead>
                
                <tr>
                    <th>Numero de empleado</th>
                    <th>Nombre Completo</th>
                    <th>Grado</th>
                    <th>Adscripcion</th>
                    <th>Genero</th>
                    <th>Bloque</th>
                    <th>Estatus</th>
                    <th>Institucion</th>
                    <th>Situacion</th>
                </tr>
            </thead>
            <tbody>
                @foreach($Emp as $E )
                <tr>
                    <td>{{ $E->NoEmp}}</td>
                    <td>{{ $E->NombreCompleto}}</td>
                    <td>{{ $E->Grado}}</td>
                    <td>{{ $E->Adscripcion}}</td>
                    <td>{{ $E->Genero}}</td>
                    <td>{{ $E->Bloque}}</td>
                    <td>{{ $E->Estatus}}</td>
                    <td>{{ $E->Institucion}}</td>
                    <td>{{ $E->Situacion}}</td>
                </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://nightly.datatables.net/js/jquery.dataTables.js"></script>

<script>
    var tables1 = $('.mytables1').DataTable({
      "dom": '<"top"i>rt<"bottom">p<"clear">',
      "pageLength": 5,
      "bLengthChange": false,
      language: {
                url: 'https://cdn.datatables.net/plug-ins/1.12.1/i18n/es-MX.json'
                },
        ordering: false,
        info: false,
    });

    $('#mySearch').on( 'keyup click', function () {
        tables1
        .columns( 0 )
        .search( this.value )
        .draw();

    });
</script>




  <!----------------------------CSS--------------------->
  <style>
  .consulta{
    margin: 0 auto;
    width: 900px;
    border: 5px #c58845 solid;
    border-radius: 5px;
    padding: 15px;

  }

  .card1{
    margin: 0 auto;
    width: 900px;
    text-align:center;
    padding: 15px;
  }
