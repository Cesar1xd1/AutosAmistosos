<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./estilos/estilo.css">
    <script src="./js/validacion.js"></script>

    <title>Clientes</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="margin-bottom: 20px; height: 80px; background-color: #7543A9;">
        <div class="container-fluid" onclick="location.href='./landing-u.php'">
            
            <label class="jover" style="padding: 5px; font-weight: bold; font-size: 20px; font-family: cursive; text-align: center;" class="navbar-brand" >Autos <br> Amistosos</label> 
             
            
        </div>
    </nav>

    <?php
        if($_POST){
        include('php/DAOS/cliente_DAO.php');
        $id = $_POST['c_id'];
        $nombre = $_POST['c_nombre'];
        $direccion = $_POST['c_dir'];
        $ff_d = $_POST['c_fechanacimiento_dia'];
        $ff_m = $_POST['c_fechanacimiento_mes'];
        $ff_a = $_POST['c_fechanacimiento_año'];
        $ce = $_POST['c_correo'];
        $telefono = $_POST['c_telefono'];
        $ff = "$ff_a-$ff_m-$ff_d";

        $clienteDAO = new ClienteDAO();
        if($clienteDAO->agregarCliente($id,$nombre,$direccion,$ce,$telefono,$ff)){
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
        <label style="margin-left: 25%; font-size: 25px; font-weight:900; font-family: cursive;"  for="">CLIENTES</label>
        <br>
        <br>
        <label class="margen"  for="">ID </label>
        <input class="margen-i" style="width: 25%;" type="number" name="c_id" id="c_id" pattern="[0-9]+" onkeypress="return solonumeros(event);" required>
        <br>

        <label class="margen" for="">Nombre</label>
        <input class="margen-i" style="width: 25%;" type="text" name="c_nombre" id="c_nombre" onkeypress="return soloLetras(event);" required>
        <br>

        
        <label class="margen" for="">Direcion</label>
        <input class="margen-i" style="width: 25%;" type="text" name="c_dir" id="c_dir" required>
        <br>
        
        <label class="margen" for="">Correo Electronico</label>
        <input class="margen-i" style="width: 25%;" type="email" name="c_correo" id="c_correo" onkeypress="return correo(event);"  pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" required >
        <br>

        <label class="margen" for="">Telefono</label>
        <input class="margen-i" style="width: 25%;" type="text" name="c_telefono" id="c_telefono" onkeypress="return solonumeros(event);" maxlength="10" required >
        <br>

        <label class="margen" for="">Fecha de Nacimiento </label>
        

        <select class="margen-i" style=" width: 5%;" name="c_fechanacimiento_dia" id="c_fechanacimiento_dia">
            <script>
                for(let step=1; step<=31;step++){
                    document.write('<option value="'+step+'">'+step+'</option>');
                }
            </script>
        </select>

        <select class="margen-i" style="margin-left: 10px; width: 10%;" name="c_fechanacimiento_mes" id="c_fechanacimiento_mes">
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

        <select class="margen-i" style="margin-left: 10px; width: 7%;" name="c_fechanacimiento_año" id="c_fechanacimiento_año">
            <script>
                for(let step=1900; step<=(new Date().getFullYear());step++){
                    document.write("<option value='"+step+"'>"+step+"</option>")
                }
            </script>
        </select>

        <input class="boton-Añadir"  type="submit" value="Añadir" >
        <input type="button" class="boton-Limpiar" onclick="limpiarCliente();" value="Limpiar">

    
        
        
    </form>
</body>
</html>