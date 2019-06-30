<?php

class usuarioDAO {
    public function logar($conexao, $login, $senha) {
        $result = $conexao->query("SELECT * FROM usuario WHERE login='$login' and senha = '$senha'");
        return $result;
    }
    
}
