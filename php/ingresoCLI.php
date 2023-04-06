<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CLIENTES</title>
    <link rel="stylesheet" href="/css/estilos.css">
    
</head>

<body>
        <header>
            <div><input type="button" id="dwn" value="ASIGNACION"  onclick="location.href='./php/index.php'"></div>
            <div><input type="button" id="dwn" value="MENSAJEROS"  onclick="location.href='./ingresoMEN.php'"></div>
            <div><input type="button" id="dwn" value="USUARIOS"  onclick="location.href='./ingresoUSU.php'"></div>
        </header> 
        <form action="./mainCLI.php" id="ingusu">
        
        <p class="title">Registros Clientes</p>
        <img src="/assets/img/domina.png" alt="LOGO DOMINA ENTREGA TOTAL">
        
        <div>
        <label for="CLIced">Cedula</label>
        <input type="number" id="CCE" name="Cedulasa" placeholder='Ingrese numero de cedula' required> 
        
        <label for="CLINom">Nombres</label>
        <input type="text" id="CLIna" name="Nombresa" placeholder='Ingrese Nombres' required> 
        
        <label for="CLIApe">Apellidos</label>
        <input type="text" id="CLIap" name="Apellidosa" placeholder='Ingrese Apellidos' required> 

        <label for="CLItel">Telefono</label>
        <input type="number" id="CLItel" name="Telefonos" placeholder='Ingrese Numero Telefonico' required>

        <label for="CLIed">Edad</label>
        <input type="number" id="CLIed" name="Edades" placeholder='Ingrese Edad' required>

        </div>
        <input type="submit" id="Asi" value="Guardar" onclick="Guard1();" /> 
        <button type="reset" id="limpiar1" hidden=""></button>
        </form>
       
          
  <script src="/js/usu.js"></script> 
  <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>    
 
  </body>
</html>