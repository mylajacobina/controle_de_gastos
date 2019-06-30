<?php

class categoriaDAO {
    public function listar($conexao) {
        $result = $conexao->query("select * from categoria");
        return $result;
    }
    
}
