<?php
  session_start();
  require('environment.php');
  $config = [];

  // Verificamos o ambiente atual. 
  if(ENVIROMENT == 'development') {
        define("BASE_URL", "http://localhost/MVC/");
        $config['dbname'] = 'estrutura_mvc';
        $config['dbhost'] = 'localhost';
        $config['dbuser'] = 'root';
        $config['dbpass'] = '';
  } else {
        define("BASE_URL", "http://meusite.com.br/");
        $config['dbname'] = 'classificados';
        $config['dbhost'] = 'localhost';
        $config['dbuser'] = 'root';
        $config['dbpass'] = '';
  }

  global $pdo;
  try {
    $pdo = new PDO("mysql:dbname=" . $config['dbname'] . ";host=" . $config['dbhost'], $config['dbuser'], $config['dbpass']);
  } catch (PDOException $e) {
    echo "Falha na conexão com banco de dados: ".$e->getMessage();
    exit;
  }
