<?php
 session_start();

 if(isset($_POST["Capturar"])){
    $registro = array();
    $registro["Nombre"] = $_POST["txtNombre"];

    $registros = array();
    if(isset($_SESSION["registros"])){
      $registros = $_SESSION["registros"];
    }
    $registros[] = $registro;

    $_SESSION["registros"] = $registros;
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Calculadora</title>
  </head>
  <body>
    <h1>Ejemplo de calculadora</h1>
    <form action="ej.php" method="post">
      <label for="txtNombre">Ingrese numero</label>
      <input type="text" name="txtNombre" placeholder="Nombre Completo"><br/><br/>
      <input type="submit" name="Capturar" value="Capturar">
    </form><br/>
  </body>
</html>
