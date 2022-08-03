<?php

/**
 * Classe model responsável por tratar das categorias de anúncios.
 * @author Pierri Alexander Vidmar
 * @since 31/07/2022
 */
class Categorias extends model
{
    /**
     * Método responsável por retornar um array com as categorias cadastradas.
     * @return array|false
     */
    public function getLista() {
        
        $array = [];
        $sql = $this->db->prepare("SELECT * FROM categorias");
        $sql->execute();
        if($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }
        return $array;
    }
}