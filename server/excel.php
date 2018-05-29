<?php
$connect = mysqli_connect("localhost", "root", "", "webservice_db");
$sql = "SELECT * FROM frases_positivas";  
$result = mysqli_query($connect, $sql);
?>
<html>  
 <head>  
  <title>Export MySQL data to Excel in PHP</title>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
 </head>  
 <body>  
  <div class="container">  
   <br />  
   <br />  
   <br />  
   <div class="table-responsive">  
    <h2 align="center">Ejemplo exportar datos mysql con php a excel</h2><br /> 
    <table class="table table-bordered">
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
     <?php
     while($row = mysqli_fetch_array($result))  
     {  
        echo '  
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
     ?>
    </table>
    <br />
    <form method="post" action="export.php">
     <input type="submit" name="export" class="btn btn-success" value="Export" />
    </form>
   </div>  
  </div>  
 </body>  
</html>