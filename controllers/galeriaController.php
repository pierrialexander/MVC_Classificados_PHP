<?php
/**
 * Classe controladora da Galeria
 */
class galeriaController extends Controller {
    public function index()
    {
        $dados = [
            'qt' => '15'
        ];

        $this->loadTemplate('galeria', $dados);
    }

    
}
