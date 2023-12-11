<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./estilos/estilo.css">
    <script src="./js/validacion.js"></script>

    <title>Autos</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="margin-bottom: 20px; height: 80px; background-color: #7543A9;">
        <div class="container-fluid" onclick="location.href='./landing-u.html'">
            
            <label class="jover" style="padding: 5px; font-weight: bold; font-size: 20px; font-family: cursive; text-align: center;" class="navbar-brand" >Autos <br> Amistosos</label> 
             
            
        </div>
    </nav>
    <?php
        if($_POST){
        include('php/DAOS/auto_DAO.php');
        $id = $_POST['c_id'];
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

        $autoDAO = new AutoDAO();
        if($autoDAO->agregarAuto($id,$precio,$modelo,$ff,$lf,$cilindros,$puertas,$peso,$capacidad,$color)){
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
        <label style="margin-left: 25%; font-size: 25px; font-weight:900; font-family: cursive;"  for="">AUTOS</label>
        <br>
        <br>
        <label class="margen"  for="">ID </label>
        <input class="margen-i" style="width: 25%;" type="number" name="c_id" id="c_id" pattern="[0-9]+" onkeypress="return solonumeros(event);" required>
       
        <br>

        <label class="margen" for="">Precio </label>
        <input class="margen-i" style=" width: 25%;" type="number" name="c_precio" id="c_precio" onkeypress="return solonumerosDecimales(event);" required>
        <br>

        <label class="margen" for="">Modelo </label>
        <input class="margen-i" type="text" style=" width: 25%;" name="c_modelo" id="c_modelo" onkeypress="return soloLetrasynum(event);" required >
        <br>
        <label class="" style="font-weight: bold; margin-left: 215px; color: grey;" for="">dia</label>
        <label class="" style="font-weight: bold; margin-left: 60px; color: grey;" for="">mes</label>
        <label class="" style="font-weight: bold; margin-left: 65px; color: grey;" for="">año</label>
        <br>

        <label class="margen" for="">Fecha de Fabricación </label>
        

        <select class="margen-i" style=" width: 5%;" name="c_fechafabicacion_dia" id="c_fechafabicacion_dia">
            <script>
                for(let step=1; step<=31;step++){
                    document.write("<option value='"+step+"'>"+step+"</option>")
                }
            </script>
        </select>

        <select class="margen-i" style="margin-left: 10px; width: 10%;" name="c_fechafabicacion_mes" id="c_fechafabicacion_mes">
            <option value="1">Enero</option>
            <option value="2">Febrero</option>
            <option value="3">Marzo</option>
            <option value="4">Abril</option>
            <option value="5">Mayo</option>
            <option value="6">Junio</option>
            <option value="7">Julio</option>
            <option value="8">Agosto</option>
            <option value="9">Septiembre</option>
            <option value="10">Octubre</option>
            <option value="11">Noviembre</option>
            <option value="12">Diciembre</option>
        </select>

        <select class="margen-i" style="margin-left: 10px; width: 7%;" name="c_fechafabicacion_año" id="c_fechafabicacion_año">
            <script>
                for(let step=1900; step<=(new Date().getFullYear());step++){
                    document.write("<option value='"+step+"'>"+step+"</option>")
                }
            </script>
        </select>
    
        <br>

        <label class="margen" for="">Lugar de Fabricación </label>
        <input class="margen-i" style="width: 25%;" type="text" name="c_lugarfabricacion" id="c_lugarfabricacion" onkeypress="return soloLetras(event);" maxlength="30" required>
        <br>

        <label class="margen" for="">Cilindros </label>
        <select class="margen-i" style=" width: 25%;" name="c_cilindros" id="c_cilindros">
            <option value="4">4</option>
            <option value="6">6</option>
            <option value="12">12</option>
            <option value="16">16</option>
        </select>
        <br>

        <label class="margen" for="">Puertas </label>
        <select class="margen-i" style="width: 25%;" name="c_puertas" id="c_puertas">
            <option value="2">2</option>
            <option value="4">4</option>
        </select>
        <br>

        <label class="margen" for="">Peso </label>
        <input class="margen-i" style="width: 25%;" step="any" type="number" min="1" name="c_peso" id="c_peso" required onkeypress="return solonumerosDecimales(event);">
        <br>

        <label class="margen" for="">Capacidad </label>
        <input class="margen-i"  style="width: 25%;" step="any" type="number"  min="1" name="c_capacidad" id="c_capacidad" onkeypress="return solonumerosDecimales(event);" required>
        <br>

        <label class="margen" for="">Color </label>
        <input class="margen-i" style=" width: 25%;" type="text" name="c_color" id="c_color" onkeypress="return soloLetras(event);" required>
        <br>

        <input class="boton-Añadir" name="boton-añadir" type="submit" value="Añadir">
        <input type="button" class="boton-Limpiar" onclick="limpiarAuto();" value="Limpiar">
    
        
        
    </form>
</body>
</html>