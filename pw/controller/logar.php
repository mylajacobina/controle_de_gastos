<?php
	session_start();
    include_once '../model/conexao.class.php';
    $con = new conexao();

    include_once 'logar.class.php';
    $aloca = new logar();

    include_once '../model/usuarioDAO.class.php';
    $logar = new usuarioDAO();

    $aloca->setUsuario($_POST['usuario']);
    $aloca->setSenha($_POST['senha']);

    $result = $logar->logar($con->conexao(), $aloca->getUsuario(),$aloca->getSenha());

	if ($result) {
		if ($row = $result->fetch(PDO::FETCH_OBJ)) {
			$_SESSION['idusuario']=$row->idUsuario;
			$_SESSION['nome_usuario']=$row->nome;
			header("Location:../view/index.php?resposta=Ação concluida com Sucesso!&situacao=alert alert-primary");
		}else{
			header("Location:../view/login.php?resposta=Erro ao logar!&situacao=alert alert-danger");

		}
			
			
	}


