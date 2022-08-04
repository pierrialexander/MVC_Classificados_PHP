<?php

class AnunciosController extends Controller {
    public function index() {
        $a = new Anuncios();
        $dados = $a->getMeusAnuncios();
        $this->loadTemplate('anuncios', $dados);
    }
}