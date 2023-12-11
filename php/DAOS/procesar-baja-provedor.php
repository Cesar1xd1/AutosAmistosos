<?php

    include("./provedor_DAO.php");
    $id = $_GET['x'];
    $provedorDAO = new ProvedorDAO();
    $res = $provedorDAO->borrar($id);
    header('location: ../../provedor-baja.php')

?>