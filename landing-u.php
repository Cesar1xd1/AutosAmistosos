
<!DOCTYPE html>
<html lang="es-mx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./estilos/estilo.css">
    <title>Autos Amistosos</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="height: 80px; background-color: #7543A9;">
      <div class="container-fluid">
        <label style="font-weight: bold; font-size: 20px; font-family: cursive; text-align: center;" class="navbar-brand">Autos <br> Amistosos</label>   
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="navbar-nav me-auto mb-2 mb-lg-0">
            
            <div class="dropdown">
              <button class="btn dropdown-toggle btn-dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="true">
                  Autos
              </button>
              <ul class="dropdown-menu bg-ligero">
                  <li><a class="dropdown-item" href="./autos-alta.php">Añadir</a></li>
                  <li><a class="dropdown-item" href="./autos-baja.php">Eliminar o Modificar</a></li>
                  <li><a class="dropdown-item" href="./autos-consulta.php">Buscar</a></li>
              </ul>  
            </div>

              <div class="dropdown">
              <button class="btn dropdown-toggle btn-dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Clientes
              </button>
              <ul class="dropdown-menu bg-ligero">
                <li><a class="dropdown-item" href="./clientes-alta.php">Añadir</a></li>
                <li><a class="dropdown-item" href="./cliente-baja.php">Eliminar o Modificar</a></li>
                <li><a class="dropdown-item" href="">Buscar</a></li>
              </ul> 
            </div>
            <div class="dropdown">
              <button class="btn dropdown-toggle btn-dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Vendedores
              </button>
              <ul class="dropdown-menu bg-ligero">
                <li><a class="dropdown-item" href="./vendedores.html">Añadir</a></li>
                <li><a class="dropdown-item" href="">Eliminar o Modificar</a></li>
                <li><a class="dropdown-item" href="">Buscar</a></li>
              </ul> 
            </div>
          
          <div class="dropdown">
              <button class="btn dropdown-toggle btn-dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Ventas
              </button>
              <ul class="dropdown-menu bg-ligero">
                <li><a class="dropdown-item" href="">Añadir</a></li>
                <li><a class="dropdown-item" href="">Eliminar o Modificar</a></li>
                <li><a class="dropdown-item" href="">Buscar</a></li>
              </ul> 
          
            </div>

            
           

            
          </div>
        </div>
        <div style="right: -20px;">
        <img src="./images/user.png"  width="60px" style="margin-right: 10px;" alt="">
        <label  for="" style="font-weight: bold; font-size: 20px;"><?php

  
       
        
 

?></label>
        <a href="./index.php">
          <img src="./images/logout.png" width="40px" style="margin-left: 10px;" alt="" >
        </a>
        </div>
      </div>
    </nav>
</body>
</html>