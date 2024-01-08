<?php
require_once('conexao.php');

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$idade = filter_input(INPUT_POST, 'idade', FILTER_DEFAULT);
$cpf = filter_input(INPUT_POST, 'cpf');
$rg = filter_input(INPUT_POST, 'rg');
$numConvenio = filter_input(INPUT_POST, 'numConvenio');
$prontuario = $_POST['prontuario'];

  if(strlen($nome) > 0 && strlen($cpf) > 0 && strlen($rg) > 0)  
  try {
        $sql = $conn->prepare('INSERT INTO clientes (nome, idade, cpf, rg, numConvenio, prontuario) VALUES (:nome, :idade, :cpf, :rg, :numConvenio, :prontuario);');
 
        $sql->bindValue(":nome", $nome, PDO::PARAM_STR); 
        $sql->bindValue(":idade", $idade, PDO::PARAM_STR);
        $sql->bindValue(":cpf", $cpf, PDO::PARAM_STR);
        $sql->bindValue(":rg", $rg, PDO::PARAM_STR);
        $sql->bindValue(":numConvenio", $numConvenio, PDO::PARAM_STR);
        $sql->bindValue(":prontuario", $prontuario, PDO::PARAM_STR);

        $sql->execute();
        header("Location: /TCC ETEC/agenda/index.php");
        echo "OK";

    } catch (PDOException $e) {
        header("Location: /TCC ETEC/agenda/index.php");
        echo 'Error: ' . $e->getMessage();
        
    } else {
        header("Location: /TCC ETEC/agenda/index.php");
    }

?>