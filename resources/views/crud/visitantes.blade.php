@include ('templates.header')
@include ('templates.menu')
<script src="https://kit.fontawesome.com/4f90b872f3.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
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
<a class ="btn btn-primary" href="accso"> Volver </a>
</div>
</form>


<div class="card">
    <h5 class="card-header"></h5>
    <div class="card-body">
      <h5 class="card-title">Listado de personas en el sistema</h5>
      <p class="card-text">
Fecha inicio
  <input type="date"  id="inicio" onchange="myFunction()">
  Fecha fin
  <input type="date"  id="fin" onchange="myFunction()">
  <br>
 
  <input type="text" id="myInput" onkeyup="myFunction1()" placeholder="Buscar por nombres..">
  <br>
  <br>
        <a onclick="ExportToExcel('xlsx')"  class="btn btn-success">Exportar a Excel</a>
<script>
        function ExportToExcel(type, fn, dl) {
    var elt = document.getElementById('cd');
    var wb = XLSX.utils.table_to_book(elt, { sheet: "sheet1",dateNF:'dd/mm/yyyy;@',timeNF:'HH:mm;@',cellDates:true,raw:true });
    return dl ?
      XLSX.write(wb, { bookType: type, bookSST: true, type: 'base64' }):
      XLSX.writeFile(wb, fn || ('Visitantes.' + (type || 'xlsx')));
}
</script>
        <div class="table table-responsive">
            <table class="table table-sm table-bordered" id="cd">
                <thead>
                    <th>NumEmp</th>
                    <th>Nombre</th>
                    <th>Primer Apellido</th>
                    <th>Segundo Apellido</th>
                    <th>Fecha</th>
                    <th>Asunto</th>
                    <th>Identificación (CIC)</th>
                    <th>Hora de entrada</th>
                    <th>Hora de salida</th>

                </thead>
                <tbody>
                @foreach ($datosVisitantes as $item)
                        <td>{{$item->NoEmp}}</td>
                        <td>{{$item->Nombre}} </td>
                        <td>{{$item->ApellidoPaterno}} </td>
                        <td>{{$item->ApellidoMaterno}} </td>
                        <td>{{$item->Fecha}} </td>
                        <td>{{$item->Asunto}} </td>
                        <td>{{$item->Identificacion}} </td>
                        <td>{{$item->h_entrada}}</td>
                        <td>{{$item->h_salida}}</td>
                        <td>
                            <form action="{{ route ("crud.actualizar_visitante", $item->id )}}" method="GET">
                                <a  class="btn btn-warning btn-sm" href="{{route ('crud.actualizar_visitante',$item->id)}}"><span class="fa-solid fa-user-pen"></span></a>
                            </form>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
            <script>
                function myFunction1() {
                  
                  var input, filter, table, tr, td, i, txtValue;
                  input = document.getElementById("myInput");
                  filter = input.value.toUpperCase();
                  table = document.getElementById("cd");
                  tr = table.getElementsByTagName("tr");
                
                  // Loop through all table rows, and hide those who don't match the search query
                  for (i = 0; i < tr.length; i++) {
                    td = tr[i].getElementsByTagName("td")[1];
                    if (td) {
                      txtValue = td.textContent || td.innerText;
                      if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                      } else {
                        tr[i].style.display = "none";
                      }
                    }
                  }
                }
                </script>
            <script>
                function verify(){
                    if(document.getElementById("inicio").value=='' || document.getElementById("fin").value==''){
                        return false;
                    }
                    return true;
                }
                
                function myFunction() {
                    if(!verify())return;
                  // Declare variables
                  var inicio, fin, filter, table, tr, td, i, txtValue;
                  inicio = document.getElementById("inicio");
                  fin = document.getElementById("fin");
                  inicio = inicio.value.toUpperCase();
                  fin = fin.value.toUpperCase();
                  table = document.getElementById("example");
                  tr = table.getElementsByTagName("tr");
                 
                
                  // Loop through all table rows, and hide those who don't match the search query
                  for (i = 0; i < tr.length; i++) {
                    td = tr[i].getElementsByTagName("td")[4];
                    if (td) {
                      txtValue = td.textContent || td.innerText;
                
                      if (txtValue.slice(1,4) >= inicio.slice(1,4) && txtValue.slice(1,4) <= fin.slice(1,4)) {
                        if(txtValue.slice(5,7) >= inicio.slice(5,7) && txtValue.slice(5,7) <= fin.slice(5,7)){
                            if(txtValue.slice(8,10) >= inicio.slice(8,10) && txtValue.slice(8,10) <= fin.slice(8,10)){
                                tr[i].style.display = "";
                            } else {
                        tr[i].style.display = "none";
                      }
                        } else {
                        tr[i].style.display = "none";
                      }
                      } else {
                        tr[i].style.display = "none";
                      } 
                    }
                  }
                }
              </script>
        </div>
      </p>
    </div>
  </div>


