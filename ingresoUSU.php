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
       
        <form action="./php/mainING.php" id="ingusu">
        
        <p class="title">Registros Usuarios</p>
        <img src="/assets/img/domina.png" alt="LOGO DOMINA ENTREGA TOTAL">
        
        <div>
        <label for="Usced">Cedula</label>
        <input type="number" id="CE" name="Cedulas" required> 
        
        <label for="Nom">Nombres</label>
        <input type="text" id="Usna" name="Nombrescom" required> 
        
        <label for="Ape">Apellidos</label>
        <input type="text" id="Usap" name="Apellidoscom" required> 

        <label for="Car">Cargo</label>
        <input type="text" id="UScar" name="Cargos" required>

        </div>
        <input type="submit" id="Asi" value="Guardar" />  
        </form>
       
          
  <script src="/js/contador.js"></script> 
  <script src="/js/visualizador.js"></script> 
  <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>    
 
  </body>
</html>