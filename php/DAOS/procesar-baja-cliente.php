<?php

    include("./cliente_DAO.php");
    $id = $_GET['x'];
    $clienteDAO = new ClienteDAO();
    $res = $clienteDAO->borrar($id);
    header('location: ../../cliente-baja.php')

?>