

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
             <a title='volver' tooltip-dir='botom' style='margin-right: 80%;' class='jover' href='../../cliente-baja.php'><img src='../../images/back.png' width='50px' height='50px' alt=''></a>            
        </div>
    </nav>



<?php


include('./cliente_DAO.php');
$id = $_GET['id'];
$clienteDAO = new ClienteDAO();
$res = $clienteDAO->mostrarClienteId($id);

$cliente = mysqli_fetch_assoc($res);

$fecha = $cliente['f_nacimiento'];

$fechaArray = explode("-",$fecha);
$dia = 0+$fechaArray[2];
$mes = 0+$fechaArray[1];
$año = 0+$fechaArray[0];

if($_POST){
    
    $nombre = $_POST['c_nombre'];
    $direcion = $_POST['c_dir'];
    $ff_d = $_POST['c_fnacimiento_dia'];
    $ff_m = $_POST['c_fnacimiento_mes'];
    $ff_a = $_POST['c_fnacimiento_año'];
    $correo = $_POST['c_correo'];
    $telefono = $_POST['c_telefono'];
    $ff = "$ff_a-$ff_m-$ff_d";

    
    $clienteDAO->update($id,$nombre,$direcion,$correo,$telefono,$fecha);
    header('location: ../../cliente-baja.php');
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


<label class='' style='font-weight: bold; margin-left: 215px; color: grey;' for=''>dia</label>
<label class='' style='font-weight: bold; margin-left: 60px; color: grey;' for=''>mes</label>
<label class='' style='font-weight: bold; margin-left: 65px; color: grey;' for=''>año</label>
<br>




<label class='margen' for=''>Fecha de Nacimiento </label>


<select class='margen-i' style=' width: 5%;' name='c_fnacimiento_dia' id='c_fnacimiento_dia'>";

echo '<script>';
echo 'for(let step=1; step<=31;step++){';
echo '   if(step == '.$dia.') {
    document.write("<option selected value=\'" + step + "\'>" + step + "</option>")
}else{
    document.write("<option value=\'" + step + "\'>" + step + "</option>")
}';
echo '}';
echo '</script>'; 

echo "</select>

<select class='margen-i' style='margin-left: 10px; width: 10%;' name='c_fnacimiento_mes' id='c_fnacimiento_mes'>";

echo '<script> 
     let mess = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",
     "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
        for(let step=1; step<=12;step++){
            if(step=='.$mes.'){
                document.write("<option selected value=\'" + step + "\' >"+mess[step-1]+"</option>");
            }else{
                document.write("<option value=\'" + step + "\' >"+mess[step-1]+"</option>");
            }
        }
</script>';
echo "
    
</select>

<select class='margen-i' style='margin-left: 10px; width: 7%;' name='c_fnacimiento_año' id='c_fnacimiento_año'>";

for ($step = 1900; $step <= (int)date("Y"); $step++) {
    if($step == $año){
        echo "<option  selected value='" . $step . "'>" . $step . "</option>";
    }else{
        echo "<option value='" . $step . "'>" . $step . "</option>";
    }
    
}
echo '</select>';

echo"
</select>


    




<input class='boton-Cambiar' name='boton-añadir' type='submit' value='Cambiar'>




</form>";


?>

</body>
</html>