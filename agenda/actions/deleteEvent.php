<?php 
require_once('conexao.php');

$id = $_GET['id'];

$sql = $conn->prepare("DELETE FROM clientes WHERE id = :id");
$sql->bindValue(':id', $id);
$sql->execute();

header('Location:  /TCC ETEC/agenda/index.php');

?>