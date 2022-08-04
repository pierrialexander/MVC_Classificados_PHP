<?php
class LoginController extends Controller {
    public function index() {
        $this->loadTemplate('login');
    }

    public function login() {
        $u = new Usuarios();
        if(isset($_POST['email']) && !empty($_POST['email'])) {
            $email = addslashes($_POST['email']);
            $senha = $_POST['senha'];

            // se login retornar true, retorna para a home já logado
            if($u->login($email, $senha)) {
                header("Location: " . BASE_URL);
            }
            else {
                $dados = [];
                $dados['erro'] = 'erro';
                $this->loadTemplate('login', $dados);
            }
        }
    }
}    
?>