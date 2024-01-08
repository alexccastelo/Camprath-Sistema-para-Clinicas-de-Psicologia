<?php
require_once('actions/conexao.php');
include('protect.php');
include('actions/readEvent.php');

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda Pessoal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Pacientes</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../index.php">Voltar ao Menu</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Read Table -->
    <div class="container">
        <button type="submit" data-bs-toggle="modal" data-bs-target="#createModal"
            class="btn btn-outline-success createButton"> Cadastrar Paciente</button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Idade</th>
                    <th scope="col">CPF</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($array as $evento): ?>
                    <tr>
                        <td>
                            <?= $evento['nome'] ?>
                        </td>
                        <td>
                            <?= $evento['idade'] ?>
                        </td>
                        <td>
                            <?= $evento['cpf'] ?>
                        </td>
                        <td class="actions">
                            <form method="POST" action="updateForm.php">
                                <input type="hidden" style="display:none;" name="id" value="<?= $evento['id']?>">
                                <button type="Submit" class="btn btn-outline-warning btn-sm">Editar</button>
                            </form>

                            <form action="actions/deleteEvent.php" method="GET">
                                <input type="hidden" style="display:none;" name="id" value="<?= $evento['id'] ?>">
                                <button type="submit" class="btn btn-outline-danger btn-sm">Deletar</button>
                            </form>
                        </td>

                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>




    <!-- Create Modal -->
    <div id="createModal" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Cadastro de Paciente</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="actions/createEvent.php" method="POST" class="createForm">
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome Completo</label>
                            <input type="text" class="form-control" name="nome" id="nome"
                                placeholder="Ex: Daniel Hatz Cardoso">
                        </div>
                        <div class="mb-3">
                            <label for="idade" class="form-label">Idade</label>
                            <input type="number" class="form-control" id="idade" name="idade" placeholder="Idade">
                        </div>
                        <div class="mb-3">
                            <label for="cpf" class="form-label">CPF</label>
                            <input type="text" class="form-control" name="cpf" id="cpf"
                                placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="rg" class="form-label">RG</label>
                            <input type="text" class="form-control" name="rg" id="rg"
                                placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="numConvenio" class="form-label">Número do Convênio</label>
                            <input type="text" class="form-control" name="numConvenio" id="numConvenio"
                                placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="prontuario" class="form-label">Prontuário</label>
                            <textarea class="form-control" name="prontuario" id="prontuario"
                                placeholder=""> </textarea>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
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