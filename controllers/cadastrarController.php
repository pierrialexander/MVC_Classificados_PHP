<?php

class cadastrarController extends Controller {
    public function index(){
        $this->loadTemplate('cadastrar');
    }
    
    public function cadastrar() {
        $u = new Usuarios();
        if(isset($_POST['nome']) && !empty($_POST['nome'])) {
            $nome = addslashes($_POST['nome']);
            $email = addslashes($_POST['email']);
            $senha = $_POST['senha'];
            $telefone = addslashes($_POST['email']);

            //Se as variáveis não estiverem vazias, cadastra
            if(!empty($nome) && !empty($email) && !empty($senha)) {
                // No servidor verifica se já existe ou se não cadastra.
                if($u->cadastrar($nome, $email, $senha, $telefone)){
                    $data = [];
                    $data['nome'] = $nome;
                    $data['email'] = $email;
                    $this->loadTemplate('login', $data);
                    return true;
                }
                else {
                    $data = [];
                    $data['erro'] = 'erro';
                    $this->loadTemplate('cadastrar', $data);
                }
            }     
        }
    }
}
