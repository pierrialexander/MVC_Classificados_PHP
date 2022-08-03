<?php

class UsuarioModel extends model
{
    public function getNome($id) {
        $sql = "SELECT nome FROM usuarios WHERE id = {$id}";
        $sql = $this->pdo->query($sql);
        if($sql->rowCount() > 0) {
            $sql = $sql->fetch();
            return $sql['nome'];
        }
        else {
            return 'Usuario não encontrado';
        }

    }

    public function getIdade($id) {
        $sql = "SELECT idade FROM usuarios WHERE id = {$id}";
        $sql = $this->pdo->query($sql);
        if($sql->rowCount() > 0){
            $sql = $sql->fetch();
            return $sql['idade'];
        }
    }
}