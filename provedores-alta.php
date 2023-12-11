<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./estilos/estilo.css">
    <script src="./js/validacion.js"></script>

    <title>Provedores</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="margin-bottom: 20px; height: 80px; background-color: #7543A9;">
        <div class="container-fluid" onclick="location.href='./landing-u.php'">
            
            <label class="jover" style="padding: 5px; font-weight: bold; font-size: 20px; font-family: cursive; text-align: center;" class="navbar-brand" >Autos <br> Amistosos</label> 
             
            
        </div>
    </nav>
    

    <?php
        if($_POST){
        include('php/DAOS/provedor_DAO.php');
        $id = $_POST['c_id'];
        $nombre = $_POST['c_nombre'];
        $direccion = $_POST['c_dir'];
        $ce = $_POST['c_correo'];
        $telefono = $_POST['c_telefono'];

        $provedorDAO = new ProvedorDAO();
        if($provedorDAO->agregarProvedor($id,$nombre,$direccion,$ce,$telefono)){
            echo '<div  class="alert alert-success sisi" role="alert">
            Insersion correcta!
            </div>';
        }else{
            echo '<div class="alert alert-danger sisi"  role="alert">
            Insersion incorrecta; ID repetido!
            </div>';
        }
    
        }
    ?>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
        setTimeout(function() {
        $(".sisi").fadeOut(500);},1500);
        });
    </script>
    

    <form action="" class="" method="post" style="margin-left: 25%; justify-content: center;">
        <label style="margin-left: 25%; font-size: 25px; font-weight:900; font-family: cursive;"  for="">PROVEDORES</label>
        <br>
        <br>
        <label class="margen"  for="">ID </label>
        <input class="margen-i" style="width: 25%;" type="number" name="c_id" id="c_id" onkeypress="return solonumeros(event);" required>
        <br>

        <label class="margen" for="">Nombre</label>
        <input class="margen-i" style="width: 25%;" type="text" name="c_nombre" id="c_nombre"  onkeypress="return soloLetras(event);" required>
        <br>

        <label class="margen" for="">Direccion</label>
        <input class="margen-i" style="width: 25%;" type="text" name="c_dir" id="c_dir"  onkeypress="return soloLetrasynum(event);" required>
        <br>

        <label class="margen" for="">Correo Electronico</label>
        <input class="margen-i" style="width: 25%;" type="email" name="c_correo" id="c_correo" onkeypress="return correo(event);"  pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" required >
        <br>

        <label class="margen" for="">Telefono</label>
        <input class="margen-i" style="width: 25%;" type="text" name="c_telefono" id="c_telefono" onkeypress="return solonumeros(event);" maxlength="10" required >
        <br>


        <input class="boton-Añadir" name="boton-añadir" type="submit" value="Añadir">
        <input type="button" class="boton-Limpiar" onclick="limpiarAuto();" value="Limpiar">

        
      

      

    
        
        
    </form>
</body>
</html>