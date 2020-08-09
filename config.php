<?php
require 'environment.php';

$config = array();

if (ENVIRONMENT == 'development') {
    define("BASE_URL", "http://projetos/PHP/classificados-mvc/");
    $config['dbname'] = 'classificados';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '85047353';
} else {
    define("BASE_URL", "http://classificados-mvc.com.br/");
    $config['dbname'] = 'estrutura_mvc';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '85047353';
}
global $db;
try {
    $db = new PDO(
        "mysql:dbname=" . $config['dbname']
        . ";host=" . $config['host'],
        $config['dbuser'],
        $config['dbpass']
    );
} catch (PDOException $e) {
    echo "ERRO: " . $e->getMessage();
    exit;
}