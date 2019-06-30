<?php
    include_once '../model/conexao.class.php';
    $con = new conexao();

    include_once '../model/categoriaDAO.php';
    $categoria = new categoriaDAO();
    $result = $categoria->listar($con->conexao());



