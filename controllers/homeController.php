<?php
/**
 * Controlador da página Home.
 */
class homeController extends Controller{

    public function index()
    {
        $dados = [];
                
        // INSTÂNCIA DE ANÚNCIOS
        $a = new Anuncios();
        $u = new Usuarios();
        $c = new Categorias();

        // RECEBEMOS OS FILTROS DE PESQUISA NO GET
        $filtros = [
            'categoria' => '',
            'preco' => '',
            'estado' => ''
        ];
        if(isset($_GET['filtros'])) {
            $filtros = $_GET['filtros'];
        }

        // BUSCA O TOTAL DE ANUNCIOS E USUÁRIOS
        $total_anuncios = $a->getTotalAnuncios($filtros);
        $total_usuarios = $u->getTotalUsuarios();


        // CONTROLE DA PAGINAÇÃO
        $p = 1;
        if(isset($_GET['p']) && !empty($_GET['p'])) {
            $p = addslashes($_GET['p']);
        }
        $porPagina = 2;
        $totalPaginas = ceil($total_anuncios / $porPagina);

        // BUSCA OS ÚLTIMOS ANÚNCIOS
        // envia como parametros o número da paginação atual e quantidade de itens 
        // por página.
        $anuncios = $a->getUltimosAnuncios($p, $porPagina, $filtros);
        // BUSCA TODAS AS CATEGORIAS DO BANCO.
        $categorias = $c->getLista();

        $dados['total_anuncios'] = $total_anuncios;
        $dados['total_usuarios'] = $total_usuarios;
        $datos['categorias'] = $categorias;
        $dados['filtros'] = $filtros;
        $dados['anuncios'] = $anuncios;
        $dados['totalPaginas'] = $totalPaginas;

        $this->loadTemplate('home', $dados);
    }
}