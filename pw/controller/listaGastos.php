<?php
    include_once '../model/conexao.class.php';
    $con = new conexao();

    include_once '../model/gastoDAO.class.php';
    $gastoDAO = new gastoDAO();

    $result = $gastoDAO->listar($con->conexao());

	if ($result) {
				
			
	}


