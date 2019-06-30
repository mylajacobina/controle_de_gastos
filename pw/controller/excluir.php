<?php
    include_once '../model/conexao.class.php';
    $con = new conexao();

    include_once '../model/gastoDAO.class.php';
    $gastoDAO = new gastoDAO();

    $result = $gastoDAO->excluir($con->conexao(),$_GET['id']);

	if ($result) {
		header("Location:../view/meusGastos.php?resposta=Ação concluida com Sucesso!&situacao=alert alert-primary");
				
			
	}

