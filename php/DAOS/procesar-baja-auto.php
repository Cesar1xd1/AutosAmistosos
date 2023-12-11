<?php

    include("./auto_DAO.php");
    $id = $_GET['x'];
    $autoDAO = new AutoDAO();
    $res = $autoDAO->borrar($id);
    header('location: ../../autos-baja.php')

?>