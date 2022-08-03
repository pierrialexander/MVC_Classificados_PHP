<?php
/**
 * Controlador da página Home.
 */
class homeController extends Controller{

    public function index()
    {
        // Instância do model de anuncios.
        $anuncios = new AnuncioModel();

        $usuarios = new UsuarioModel();

        $dados = [
            'quantidade' => $anuncios->getQuantidade(),
            'nome' => $usuarios->getNome(1),
            'idade' => $usuarios->getIdade(1)
        ];
        $this->loadTemplate('home', $dados);
    }
}