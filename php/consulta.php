<?php
 
  // $mysqli = new mysqli('localhost', 'usuario', 'password', 'base_de_datos');
 
  $mysqli = new mysqli('localhost', 'root', '46682156', 'domina');
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONSULTAS</title>
    <link rel="stylesheet" href="/css/estilos.css">
    
</head>

<body>
        <header>
            <div><input type="button" id="dwn" value="ASIGNACION"  onclick="location.href='./index.php'"></div>
            <div><input type="button" id="dwn" value="MENSAJEROS"  onclick="location.href='./ingresoMEN.php'"></div>
            <div><input type="button" id="dwn" value="CLIENTES"  onclick="location.href='./ingresoCLI.php'"></div>
        </header> 
        <form>
        <p class="title">Consultas</p>
        <img src="/assets/img/domina.png" alt="LOGO DOMINA ENTREGA TOTAL">
        <div>
        <label for="Mens">Consulta guias por mensajero</label>
        <select name="Consulta" id="CMens" required>
          <option value="">Seleccione Mensajero</option>
          <?php
          $query = $mysqli -> query ("SELECT * FROM mensajeros");
          while ($valores = mysqli_fetch_array($query)) {
          echo '<option value="'.$valores['MENced'].'">'.$valores['MENnombre'].'</option>';
          }
        ?>
        </select> 
        </div>
        <input type="submit" id="Asi" value="Consultar"/>
        <?php
          $query = $mysqli -> query ("SELECT MENSAJERO,GUIA,FECHA FROM asignacion WHERE Consulta=");
          while ($valores = mysqli_fetch_array($query)) {
          echo '<option value="'.$valores['MENced'].'">'.$valores['MENnombre'].'</option>';
          }
        ?>
        </form>

  <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>    
 
  </body>
</html>