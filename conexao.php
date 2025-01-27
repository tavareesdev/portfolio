<?php

$hostname = $_SERVER['HTTP_HOST'];

if ($hostname == 'localhost') {
    include $_SERVER['DOCUMENT_ROOT'] . '/portfolio/globalConfig.php';
} else {
    include 'globalConfig.php';
}

// define('HOST', '127.0.0.1:3306');
// define('USUARIO', $userDB);
// define('SENHA', $passwordDB);
// define('DB', $database);

//  $conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possivel conectar');

