<div class="container">
    <h2>Faça seu cadastro</h2>
    <hr>
    <!--    INICIO DO FORMULÁRIO DE CADASTRO-->
    
    <form method="POST" action="<?php echo BASE_URL; ?>cadastrar/cadastrar">
        <?php if($erro): ?>
                <div class="alert alert-warning">
                    Este usuário já exite!
                    <a href="<?php echo BASE_URL; ?>login" class="alert-link">Faça o login agora</a>
                </div>
        <?php endif; ?>
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" class="form-control">
        </div>
        <div class="form-group">
            <label for="telefone">Telefone:</label>
            <input type="text" name="telefone" id="telefone" class="form-control">
        </div>
        <input type="submit" value="Cadastrar" class="btn btn-primary"/>
    </form>
</div>