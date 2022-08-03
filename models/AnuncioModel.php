<?php

/**
 * Classe controladora do Modelo de Anuncios
 */
class AnuncioModel extends model
{
    public function getQuantidade() {
        $sql = "SELECT COUNT(*) as c FROM anuncios";
        $sql = $this->pdo->query($sql);
        if($sql->rowCount() > 0){
            $sql = $sql->fetch();
            return $sql['c'];
        }
        else {
            return 0;
        }
    }
}