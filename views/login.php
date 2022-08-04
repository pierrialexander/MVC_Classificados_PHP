<div class="container">
    <h1>Faça seu Login</h1>

    <!-- INICIO DO FORMULÁRIO DE CADASTRO -->
    <form method="POST" action="<?php echo BASE_URL; ?>login/login">
        <?php if($erro): ?>
                <div class="alert alert-danger">
                    Login ou Senha Incorretos!
                </div>
        <?php endif; ?>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" class="form-control">
        </div>
        <input type="submit" value="Fazer Login" class="btn btn-primary"/>
    </form>
</div>

