<html>
    <head>
        <title>Meu Site</title>
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css">
    </head>
    <body>
    <nav class="navbar navbar-inverse barramenu">
        <div class=""container-fluid>
            <div class="navbar-header">
                <a href="<?php echo BASE_URL; ?>" class="navbar-brand" id="titulo">Classificados</a>
            </div>
            <ul class="nav navbar-nav navbar-right menuacesso">
                <?php if(isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin'])): ?>
                    <li><a id="linkmenu">Olá <?php echo $_SESSION['cUsuario']; ?></a></li>
                    <li><a id="linkmenu" href="<?php echo BASE_URL; ?>anuncios">Meus Anúncios</a></li>
                    <li><a id="linkmenu" href="<?php echo BASE_URL; ?>sair">Sair</a></li>
                <?php else: ?>
                    <li><a id="linkmenu" href="<?php echo BASE_URL; ?>cadastrar">Cadastre-se</a></li>
                    <li><a id="linkmenu" href="<?php echo BASE_URL; ?>login">Login</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>
        <?php $this->loadViewInTemplate($viewName, $viewData); ?>

        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.js"></script>
        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
    </body>
</html>