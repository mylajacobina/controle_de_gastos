<?php
	session_start();
    include_once '../model/conexao.class.php';
    $con = new conexao();

    include_once 'gastos.class.php';
    $aloca = new gastos();

    include_once '../model/gastoDAO.class.php';
    $gastoDAO = new gastoDAO();

    $aloca->setValor($_POST['valor']);
    $aloca->setData($_POST['data']);
    $aloca->setCategoria_id($_POST['categoria']);
    $aloca->setUsuario_id($_SESSION['idusuario']);
    
    $result = $gastoDAO->cadastrar(
    	 $con->conexao(),
    	 $aloca->getData(),
    	 $aloca->getValor(),
    	 $aloca->getCategoria_id(),
    	 $aloca->getUsuario_id()
    	);

	if ($result) {
			header("Location:../view/cadastrarGastos.php?resposta=Ação concluida com Sucesso!&situacao=alert alert-primary");
		}else{
			header("Location:../view/cadastrarGastos.php?resposta=Erro ao logar!&situacao=alert alert-danger");

			}
			
			
	


