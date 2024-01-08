<?php
//Criar as constantes com as credencias de acesso ao banco de dados
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DBNAME', 'clinicaperes');

    try {
        $conn = new pdo('mysql:host=' . HOST . ';dbname=' . DBNAME, USER, PASS);
    } catch (PDOException $e) {
        echo "Erro: Conexão com banco de dados não foi realizada com sucesso. Erro gerado " . $e->getMessage();
    };
?>