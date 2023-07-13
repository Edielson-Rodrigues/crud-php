<?php 
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('BASE', 'cadastro');

    //Criando conexão com o banco
    $conn = new MySQLi(HOST, USER, PASS, BASE);
?>