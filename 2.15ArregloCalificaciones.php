<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Arreglo Calificaciones 2.15</title>
	<style type="text/css">
    body{
      font-family: sans-serif;
      color: #000;
      background: linear-gradient(to right, #4169E1, thistle  ), #fff;
      text-align: center;
      font-size: 30px;
          }
  </style>
</head>
<body>
<?php
$Calificaciones = array('Matias'=> "9", 'Gerardo'=> "6", 'Mariana'=> "10", 'Francisco' => "7", 'Jesus' => "4");

echo"<pre>";
foreach ($Calificaciones as $Alumno=>$Calificacion) {
	echo " El alumno   " .$Alumno ."   Tiene calificacion de:   " .$Calificacion ;
echo"<br>";
}
 echo '<span style="font-family: Brush Script MT; font-size: 70px; color: red;">Calificaciones en orden descendiente</span><br>';
echo"<pre>";
asort($Calificaciones);
foreach ($Calificaciones as $Alumno=>$Calificacion) {
	echo " El alumno   " .$Alumno ."   Tiene calificacion de:   " .$Calificacion ."<br>";

}
?>
</body>
</html>