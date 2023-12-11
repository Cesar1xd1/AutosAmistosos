

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../../estilos/estilo.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary" style="margin-bottom: 20px; height: 80px; background-color: #7543A9;">
        <div class="container-fluid" onclick="location.href='../../landing-u.php'">
            
            <label class="jover" style="padding: 5px; font-weight: bold; font-size: 20px; font-family: cursive; text-align: center;" class="navbar-brand" >Autos <br> Amistosos</label> 
             <a title='volver' tooltip-dir='botom' style='margin-right: 80%;' class='jover' href='../../provedor-baja.php'><img src='../../images/back.png' width='50px' height='50px' alt=''></a>            
        </div>
    </nav>



<?php


include('./provedor_DAO.php');
$id = $_GET['id'];
$provedorDAO = new ProvedorDAO();
$res = $provedorDAO->mostrarProvedoresId($id);

$cliente = mysqli_fetch_assoc($res);

if($_POST){
    
    $nombre = $_POST['c_nombre'];
    $direcion = $_POST['c_dir'];
    $correo = $_POST['c_correo'];
    $telefono = $_POST['c_telefono'];

    
    $provedorDAO->update($id,$nombre,$direcion,$correo,$telefono);
    header('location: ../../provedor-baja.php');
}



echo " <form action='' class='' method='post' style='margin-left: 25%; justify-content: center;'>
<label style='margin-left: 25%; font-size: 25px; font-weight:900; font-family: cursive;'  for=''>AUTOS</label>
<br>
<br>
<label class='margen'  for=''>ID </label>
<input class='margen-i' style='width: 25%;' type='number' name='c_id' id='c_id' pattern='[0-9]+' value=".$cliente['id']." disabled required>

<br>


<label class='margen' for=''>Nombre </label>
<input class='margen-i' type='text' style=' width: 25%;' name='c_nombre' id='c_nombre' value='".$cliente['nombre']."' onkeypress='return soloLetras(event);' required >
<br>

<label class='margen' for=''>Direccion</label>
<input class='margen-i' type='text' style=' width: 25%;' name='c_dir' id='c_dir' value='".$cliente['direccion']."' onkeypress='return soloLetras(event);' required >
<br>


<label class='margen' for=''>Correo Electronico </label>
<input class='margen-i' style='width: 25%;' type='text' name='c_correo' id='c_correo' value='".$cliente['correo']."' onkeypress='return correo(event);' maxlength='30' required>
<br>

<label class='margen' for=''>Telefono</label>
        <input class='margen-i' style='width: 25%;' type='text' name='c_telefono' id='c_telefono' value='".$cliente['telefono']."' onkeypress='return solonumeros(event);' maxlength='10' required >
        <br>







<input class='boton-Cambiar' name='boton-añadir' type='submit' value='Cambiar'>




</form>";


?>

</body>
</html>