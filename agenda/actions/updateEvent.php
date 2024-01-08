<?php 
require_once('conexao.php');

$id = filter_input(INPUT_POST, 'id');
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$idade = filter_input(INPUT_POST, 'idade', FILTER_DEFAULT);
$cpf = filter_input(INPUT_POST, 'cpf' );
$rg = filter_input(INPUT_POST, 'rg');
$numConvenio = filter_input(INPUT_POST, 'numConvenio');
$prontuario = $_POST['prontuario'];

 $sql = $conn->prepare("UPDATE clientes SET nome= :nome,idade= :idade, cpf= :cpf, rg= :rg, numConvenio= :numConvenio, prontuario= :prontuario WHERE id = :id");
 $sql->bindValue(':id', $id);
 $sql->bindValue(':nome', $nome);
 $sql->bindValue(':idade', $idade);
 $sql->bindValue(':cpf', $cpf);
 $sql->bindValue(':rg', $rg);
 $sql->bindValue(':numConvenio', $numConvenio);
 $sql->bindValue(':prontuario', $prontuario);

var_dump($id, $nome, $idade, $cpf, $rg, $numConvenio, $prontuario);

$sql->execute();

 header("Location:  /TCC ETEC/agenda/index.php");

?>