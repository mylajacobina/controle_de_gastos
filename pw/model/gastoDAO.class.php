<?php

class gastoDAO {
    public function cadastrar($conexao, $data, $valor,$categoria_id, $usuario_id) {
        $result = $conexao->query("insert into gastos (data,valor,categoria_id, usuario_id) values ('$data', $valor,$categoria_id, $usuario_id)");
        return $result;
    }

    public function listar($conexao) {
        $result = $conexao->query("select * from gastos, categoria where idCategoria=categoria_id");
        return $result;
    }

        public function excluir($conexao,$id) {
        $result = $conexao->query("delete from gastos where idGastos=$id");
        return $result;
    }
    
}
