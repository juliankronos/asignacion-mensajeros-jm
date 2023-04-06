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
    <title>Asignacion Mensajeros</title>
    <link rel="stylesheet" href="/css/estilos.css">
    
</head>

<body>
        <form action="./php/main.php" id="Ingreso">
        <p class="title">Asignacion Mensajero</p>
        <img src="/assets/img/domina.png" alt="LOGO DOMINA ENTREGA TOTAL">
        <label for="Man">Manifestador</label>
        <select name="Usuarios" id="Man" required>
          <option value="">Seleccione</option>
          <?php
          $query = $mysqli -> query ("SELECT * FROM usuarios");
          while ($valores = mysqli_fetch_array($query)) {
          echo '<option value="'.$valores['USid'].' ">'.$valores['USnombres'].'   '.$valores['USapellidos'].'</option>';
          }
          ?>
        </select>  
        <label for="Sed">Sede</label>
        <select name="Sedes" id="Sed" required>
          <option value="">Seleccione Sede</option>
          <?php
          $query = $mysqli -> query ("SELECT * FROM sedes");
          while ($valores = mysqli_fetch_array($query)) {
          echo '<option value="'.$valores['SEid'].'">'.$valores['sede'].'</option>';
          }
          ?>
        </select>  
        <label for="Ciu">Ciudad</label>
        <select name="Ciudades" id="Ciu" required>
          <option value="0">Seleccione Ciudad</option>
          <?php
          $query = $mysqli -> query ("SELECT * FROM ciudades");
          while ($valores = mysqli_fetch_array($query)) {
          echo '<option value="'.$valores['codigo'].'">'.$valores['CIciudad'].'</option>';
          }
          ?>
        </select>    
        <label for="Mens">Mensajero</label>
        <select name="Mensajeros" id="Mens" required>
          <option value="">Seleccione Mensajero</option>
          <?php
          $query = $mysqli -> query ("SELECT * FROM mensajeros");
          while ($valores = mysqli_fetch_array($query)) {
          echo '<option value="'.$valores['MENced'].'">'.$valores['MENnombre'].'</option>';
          }
          ?>
        </select>  
        <label for="TV">Vehiculo</label>
        <select name="Vehiculos" id="TV" required>
          <option value="">Seleccione Tipo Vehiculo</option>
          <?php
          $query = $mysqli -> query ("SELECT * FROM vehiculos");
          while ($valores = mysqli_fetch_array($query)) {
          echo '<option value="'.$valores['Vid'].'">'.$valores['tipo'].'</option>';
          }
          ?>
        </select> 
        <label for="Pl">Placa</label>
        <input type="text" id="Pl" name="Placa" required>   
        <label for="Cl">Cliente</label>
        <select name="Clientes" id="Cl" required>
          <option value="">Seleccione Cliente</option>
          <?php
          $query = $mysqli -> query ("SELECT * FROM clientes");
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option value="'.$valores['Ced'].' ">'.$valores['Clinombres'].'   '.$valores['Cliapellidos'].'</option>';
          }
          ?>
        </select> 
        <label for="Gi">Guia</label>
        <input type="number" id="Gi" name="Guias" required> 
        <input type="submit" id="Asi" value="Asignar" onclick="ShowSelected();"/>  
        </form>
        <form  id="Contador">
        <p id="tga">Total Guias Asignadas</p>
        <p id="areaContador">0</p>
        <form>
          <div id="prev">
          <p id="as">Asignaciones</p>
          <input type="button" id="dwn" value="Consultar"  onclick="location.href='./php/consulta.php'">
        </div> 
        <div class="visual">
          <th>Sede</th>
          <ul id="Sedd"></ul>
        </div>
        <div class="visual">
          <th>Ciudad</th>
          <ul id="Ciuu"></ul>
        </div>
        <div class="visual">
          <th>Mensajero</th>
          <ul id="Menss"></ul>
        </div>
        <div class="visual">
          <th>Guia</th>
          <ul id="Guii"></ul>
        </div>
        <br>
        </form>
        </form>  
          
  <script src="/js/contador.js"></script> 
  <script src="/js/visualizador.js"></script> 
  <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>    
 
  </body>
</html>








