<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USUARIOS</title>
    <link rel="stylesheet" href="/css/estilos.css">
    
</head>

<body>
        <header>
            <div><input type="button" id="dwn" value="ASIGNACION"  onclick="location.href='./index.php'"></div>
            <div><input type="button" id="dwn" value="MENSAJEROS"  onclick="location.href='./ingresoMEN.php'"></div>
            <div><input type="button" id="dwn" value="CLIENTES"  onclick="location.href='./ingresoCLI.php'"></div>
        </header> 
        <form action="./mainING.php" id="ingusu">
        
        <p class="title">Registros Usuarios</p>
        <img src="/assets/img/domina.png" alt="LOGO DOMINA ENTREGA TOTAL">
        
        <div>
        <label for="Usced">Cedula</label>
        <input type="number" id="CE" name="Cedulas" placeholder='Ingrese numero de cedula' required> 
        
        <label for="Nom">Nombres</label>
        <input type="text" id="Usna" name="Nombrescom" placeholder='Ingrese Nombres' required> 
        
        <label for="Ape">Apellidos</label>
        <input type="text" id="Usap" name="Apellidoscom" placeholder='Ingrese Apellidos' required> 

        <label for="Car">Cargo</label>
        <input type="text" id="UScar" name="Cargos" placeholder='Ingrese Cargo' required>

        </div>
        <input type="submit" id="Asi" value="Guardar" onclick="Guard1();" /> 
        <button type="reset" id="limpiar1" hidden=""></button>
        </form>
       
          
  <script src="/js/usu.js"></script> 
  <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>    
 
  </body>
</html>