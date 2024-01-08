<?php
require_once('actions/conexao.php');



$id = $_POST['id'];
$array = [];

$sql = $conn->query("SELECT * FROM clientes WHERE ID = '$id'");

if ($sql->rowCount() > 0) {
    $array = $sql->fetchAll(PDO::FETCH_ASSOC);
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualização de Paciente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

    <div id="a" class="container">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Atualizar Dados do Paciente</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <?php foreach ($array as $cliente): ?>
                <div class="modal-body">
                    <form action="actions/updateEvent.php" method="POST" class="createForm">
                    <div class="mb-3" style="display:none;width:1px">
                            <label for="id" class="form-label"></label>
                            <input type="number" class="form-control" value="<?= $cliente['id']?>" name="id" id="id"
                                placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="nome" class="form-label"></label>
                            <input type="text" class="form-control" value="<?= $cliente['nome']?>" name="nome" id="nome"
                                placeholder="Ex: Daniel Hatz Cardoso">
                        </div>
                        <div class="mb-3">
                            <label for="idade" class="form-label">Idade</label>
                            <input type="number" class="form-control" id="idade" value="<?=  $cliente['idade']?>" name="idade" placeholder="Idade">
                        </div>
                        <div class="mb-3">
                            <label for="cpf" class="form-label">CPF</label>
                            <input type="text" class="form-control" name="cpf" value="<?= $cliente['cpf']?>" id="cpf"
                                placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="rg" class="form-label">RG</label>
                            <input type="text" class="form-control" name="rg" value="<?= $cliente['rg']?>" id="rg"
                                placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="numConvenio" class="form-label">Número do Convênio</label>
                            <input type="text" class="form-control" name="numConvenio" id="numConvenio" value="<?= $cliente['numConvenio']?>"
                                placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="prontuario" class="form-label">Prontuário</label>
                            <textarea class="form-control" rows="3" name="prontuario" id="prontuario"
                          placeholder=""> <?php echo $cliente['prontuario']?> </textarea>
                        </div>
                        <?php endforeach; ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"><a href="index.php"
                        style="text-decoration:none;">Fechar</a></button>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
                    </form>
        </div>
    </div>
</div>

<footer></footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
</body>

</html>