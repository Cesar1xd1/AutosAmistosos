

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
        <div class="container-fluid" onclick="location.href='../../landing-u.html'">
            
            <label class="jover" style="padding: 5px; font-weight: bold; font-size: 20px; font-family: cursive; text-align: center;" class="navbar-brand" >Autos <br> Amistosos</label> 
             <a title='volver' tooltip-dir='botom' style='margin-right: 80%;' class='jover' href='../../autos-baja.php'><img src='../../images/back.png' width='50px' height='50px' alt=''></a>            
        </div>
    </nav>



<?php


include('./auto_DAO.php');
$id = $_GET['id'];
$autoDAO = new AutoDAO();
$res = $autoDAO->mostrarAutoId($id);

$auto = mysqli_fetch_assoc($res);

$fecha = $auto['fecha_f'];

$fechaArray = explode("-",$fecha);
$dia = 0+$fechaArray[2];
$mes = 0+$fechaArray[1];
$año = 0+$fechaArray[0];

if($_POST){
    
    
    $precio = $_POST['c_precio'];
    $modelo = $_POST['c_modelo'];
    $ff_d = $_POST['c_fechafabicacion_dia'];
    $ff_m = $_POST['c_fechafabicacion_mes'];
    $ff_a = $_POST['c_fechafabicacion_año'];
    $lf = $_POST['c_lugarfabricacion'];
    $cilindros = $_POST['c_cilindros'];
    $puertas = $_POST['c_puertas'];
    $peso = $_POST['c_puertas'];
    $capacidad = $_POST['c_capacidad'];
    $color = $_POST['c_color'];
    $ff = "$ff_a-$ff_m-$ff_d";

    
    $autoDAO->update($id,$precio,$modelo,$ff,$lf,$cilindros,$puertas,$peso,$capacidad,$color);
    header('location: ../../autos-baja.php');
}



echo " <form action='' class='' method='post' style='margin-left: 25%; justify-content: center;'>
<label style='margin-left: 25%; font-size: 25px; font-weight:900; font-family: cursive;'  for=''>AUTOS</label>
<br>
<br>
<label class='margen'  for=''>ID </label>
<input class='margen-i' style='width: 25%;' type='number' name='c_id' id='c_id' pattern='[0-9]+' value=".$auto['id']." disabled required>

<br>

<label class='margen' for=''>Precio </label>
<input class='margen-i' style=' width: 25%;' type='number' name='c_precio' id='c_precio' value=".$auto['precio']." onkeypress='return solonumerosDecimales(event);' required>
<br>

<label class='margen' for=''>Modelo </label>
<input class='margen-i' type='text' style=' width: 25%;' name='c_modelo' id='c_modelo' value=".$auto['modelo']." onkeypress='return soloLetrasynum(event);' required >
<br>
<label class='' style='font-weight: bold; margin-left: 215px; color: grey;' for=''>dia</label>
<label class='' style='font-weight: bold; margin-left: 60px; color: grey;' for=''>mes</label>
<label class='' style='font-weight: bold; margin-left: 65px; color: grey;' for=''>año</label>
<br>

<label class='margen' for=''>Fecha de Fabricación </label>


<select class='margen-i' style=' width: 5%;' name='c_fechafabicacion_dia' id='c_fechafabicacion_dia'>";

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

<select class='margen-i' style='margin-left: 10px; width: 10%;' name='c_fechafabicacion_mes' id='c_fechafabicacion_mes'>";

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

<select class='margen-i' style='margin-left: 10px; width: 7%;' name='c_fechafabicacion_año' id='c_fechafabicacion_año'>";

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

<br>

<label class='margen' for=''>Lugar de Fabricación </label>
<input class='margen-i' style='width: 25%;' type='text' name='c_lugarfabricacion' id='c_lugarfabricacion' value='".$auto['lugar_f']."' onkeypress='return soloLetras(event);' maxlength='30' required>
<br>

<label class='margen' for=''>Cilindros </label>
<select class='margen-i' style=' width: 25%;' name='c_cilindros' id='c_cilindros'>";
$cili = array(4,6,12,16);
for($step =0; $step<=3;$step++){
    if($cili[$step]==$auto['cilindros']){
        echo "<option selected value='".$cili[$step]."'>".$cili[$step]."</option>";
    }else{
        echo "<option value='".$cili[$step]."'>".$cili[$step]."</option>";
    }
}

    

echo "</select>
<br>

<label class='margen' for=''>Puertas </label>
<select class='margen-i' style='width: 25%;' name='c_puertas' id='c_puertas'>";
        for($step =2; $step<=4;$step = $step+2){
            if($step==$auto['puertas']){
                echo "<option selected value='".$step."'>".$step."</option>";
            }else{
                echo "<option value='".$step."'>".$step."</option>";
            }
        }
    
echo "</select>
<br>

<label class='margen' for=''>Peso </label>
<input class='margen-i' style='width: 25%;' step='any' type='number' min='1' name='c_peso' id='c_peso' value='".$auto['peso']."' required onkeypress='return solonumerosDecimales(event);'>
<br>

<label class='margen' for=''>Capacidad </label>
<input class='margen-i'  style='width: 25%;' step='any' type='number'  min='1' name='c_capacidad' id='c_capacidad' value='".$auto['capacidad']."' onkeypress='return solonumerosDecimales(event);' required>
<br>

<label class='margen' for=''>Color </label>
<input class='margen-i' style=' width: 25%;' type='text' name='c_color' id='c_color' value='".$auto['color']."' onkeypress='return soloLetras(event);' required>
<br>

<input class='boton-Cambiar' name='boton-añadir' type='submit' value='Cambiar'>




</form>";


?>

</body>
</html>