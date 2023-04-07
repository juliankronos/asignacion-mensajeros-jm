<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENSAJEROS</title>
    <link rel="stylesheet" href="/css/estilos.css">
    
</head>

<body>
        <header>
            <div><input type="button" id="dwn" value="ASIGNACION"  onclick="location.href='./index.php'"></div>
            <div><input type="button" id="dwn" value="MENSAJEROS"  onclick="location.href='./ingresoMEN.php'"></div>
            <div><input type="button" id="dwn" value="CLIENTES"  onclick="location.href='./ingresoCLI.php'"></div>
        </header> 
        <form action="./mainMEN.php" id="ingmen">
        
        <p class="title">Registros Mensajeros</p>
        <img src="/assets/img/domina.png" alt="LOGO DOMINA ENTREGA TOTAL">
        
        <div>
        <label for="Mced">Cedula</label>
        <input type="number" id="CE" name="CedulasM" placeholder='Ingrese numero de cedula' required> 
        
        <label for="MNom">Nombres y apellidos</label>
        <input type="text" id="Mna" name="NombresM" placeholder='Ingrese Nombres' required> 
             
        </div>
        <input type="submit" id="Asi" value="Guardar" onclick="Guard2();"/> 
        <button type="reset" id="limpiar2" hidden=""></button>
        </form>
       
          
  <script src="/js/men.js"></script>  
  <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>    
 
  </body>
</html>