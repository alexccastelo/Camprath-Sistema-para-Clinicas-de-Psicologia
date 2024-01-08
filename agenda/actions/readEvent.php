<?php 
require_once('conexao.php');

    $array = [];

    $sql = $conn->query('SELECT * FROM clientes');

    if($sql->rowCount() > 0) {
        $array = $sql->fetchAll(PDO::FETCH_ASSOC);
    }
?>