<?php  
//export.php  
$connect = mysqli_connect("localhost", "root", "m9a7r5s3", "webservice_db");
$connect = mysqli_connect("localhost", "root", "", "webservice_db");
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM frases_positivas";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">
                    <tr>
                         <th>Registros Total subido</th>
                         <th>Completados Total compl</th>
                         <th>Fallidos Total Fallidos</th>
                         <th>Ocupados o b. de voz Total tel ocupados</th>
                         <th>rut</th>
                         <th>telefono</th>
                         <th>fecha inicio</th>
                         <th>duracion</th>
                         <th>Texto entregado</th>
                         <th>Texto recibido</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
        <td>'.$row["1"].'</td>  
        <td>'.$row["frase_positiva"].'</td>
        <td>'.$row["1"].'</td>  
        <td>'.$row["frase_positiva"].'</td>
        <td>'.$row["1"].'</td>  
        <td>'.$row["frase_positiva"].'</td>
        <td>'.$row["1"].'</td>  
        <td>'.$row["frase_positiva"].'</td>
        <td>'.$row["1"].'</td>  
        <td>'.$row["frase_positiva"].'</td>
    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }
}
?>