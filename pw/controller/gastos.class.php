<?php 

class gastos {
	private $data;
	private $valor;
	private $categoria_id;
	private $usuario_id;


	function  getData(){
		return $this->data;
	}
	function getValor(){
		return $this->valor;
	}
	function getCategoria_id(){
		return $this->categoria_id;
	}
	function getUsuario_id(){
		return $this->usuario_id;
	}

	function setData($data){
		$this->data=$data;
	}
	function setValor($valor){
		$this->valor=$valor;
	}
	function setCategoria_id($categoria_id){
		$this->categoria_id=$categoria_id;
	}
	function setUsuario_id($usuario_id){
		$this->usuario_id=$usuario_id; 	
	}



}
