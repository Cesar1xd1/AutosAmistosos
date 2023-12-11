<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./estilos/estilo.css">
    <script src="./js/validacion.js"></script>
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="margin-bottom: 20px; height: 80px; background-color: #7543A9;">
        <div class="container-fluid" onclick="location.href='./landing-u.php'">

            <label class="jover" style="padding: 5px; font-weight: bold; font-size: 20px; font-family: cursive; text-align: center;" class="navbar-brand">Autos <br> Amistosos</label>


        </div>
    </nav>

    <form action="" class="" method="post" style="margin-left: 25%; justify-content: center;">
        <label style="margin-left: 25%; font-size: 25px; font-weight:900; font-family: cursive;" for="">BUSCAR AUTOS</label>
        <br>
        <br>
        <label class="margen" for="">ID </label>
        <input class="margen-i" style="width: 25%;" type="number" name="c_id" id="c_id" pattern="[0-9]+" onkeypress="return solonumeros(event);" required>
        <input type="submit" class="boton-Buscar" value="Buscar">
    </form>


 
    <?php if($_POST){

include('php/DAOS/auto_DAO.php');
$id = $_POST['c_id'];
$autoDAO = new AutoDAO();
$res = $autoDAO->mostrarAutoLike($id);

echo '<div class="container" style="justify-content: center;">';

echo '<label style="margin-left: 45%; font-size: 25px; font-weight:900; font-family: cursive;"  for="">AUTOS</label>';
echo '<br>';
if(mysqli_num_rows($res)>0){ 
    echo "<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css' rel='stylesheet'>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js'></script>
    <link rel='stylesheet' href='./estilos/estilo.css'>";
    
    printf("<table class='table  table-hover table-bordered border border-secondary rounded'>");
    echo '<thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Precio</th>
      <th scope="col">Modelo</th>
      <th scope="col">Fecha de Fabricacion</th>
      <th scope="col">Lugar de Fabricacion</th>
      <th scope="col">Cilindros</th>
      <th scope="col">Puertas</th>
      <th scope="col">Peso</th>
      <th scope="col">Capacidad</th>
      <th scope="col">Color</th>
      <th scope="col">Eliminar</th>
      <th scope="col">Modificar</th>
    </tr>
  </thead>
  <tbody>';

  
    while($fila = mysqli_fetch_assoc($res)){    
        printf("<tr> <td>".$fila['id']."</td>
        <td>". '$'.number_format($fila['precio'], 2, '.', ',') ."</td>
                <td>".$fila['modelo']."</td>
                <td>".$fila['fecha_f']."</td>
                <td>".$fila['lugar_f']."</td>
                <td>".$fila['cilindros']."</td>
                <td>".$fila['puertas']."</td>
                <td>".$fila['peso'].' Kg'."</td>
                <td>".$fila['capacidad']."</td>
                <td>".$fila['color']."</td>
                <td style='text-align: center;'><button type='button' class='btn btn-danger' onclick='window.modal".$fila['id'].".showModal();'><img src='./images/trash-can.png' height ='30' width='30'/></button></td>
                <td style='text-align: center;'><form method='post' action='./php/DAOS/procesar-cambio-auto.php?id=%d'><button type='submit' class='btn btn-primary' href=''><img src='./images/edit.png' height ='30' width='30'/></button></form></td> 
                
        <dialog class='dial' id='modal".$fila['id']."'>
            <h2>¿Seguro que desea eliminar este registro?</h2>

            <form method='post' action='./php/DAOS/procesar-baja-auto.php?x=%d'><input class='btn btn-danger b-dial' type='submit' value='Confirmar'></form>
            <button class='btn btn-info b-dial' onclick='window.modal".$fila['id'].".close();'>Cerrar</button>
        </dialog>",$fila['id'],$fila['id']);
    }
    echo "</tbody></table> ";
    
    
}else{
    echo "<h1 style='text-align:center; margin-top: 100px; font-size:100px; border: 5px solid blue'>No hay datos</h1>";
}
echo '</div>';

    }
       
    ?>

    



</body>
</html>