<!DOCTYPE html>
<html lang="pt-br">

<?php 
    include("php/conexao.php");

    $consulta = "SELECT * FROM dadosDashboard";
    $con = $mysqli->query($consulta) or die($mysqli->error);
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/agenda.css">
    <title>Agenda</title>
</head>

<body>

    <div class="geral">

            <div class="agenda">

            </div>

            <div class="tabelaGeral">
            <div class="botoes">
            <button class="buttonadc">Novo agendamento</button>
            <input type="text" class="divBusca" placeholder="Buscar">
            </div>

                <div id="tabelagenda">
                    <table>
                        <thead>
                            <tr>
                                <th></th>
                                <th>Hora</th>
                                <th>Nome</th>
                                <th>Sala</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="radio"></td>
                                <td>08:00</td>
                                <td>João</td>
                                <td>Sala 6</td>
                                <td>Na espera </td>
                            </tr>
                            <tr>
                                <td><input type="radio"></td>
                                <td>09:00</td>
                                <td>Daniel</td>
                                <td>Sala 5</td>
                                <td>Em andamento</td>
                            </tr>
                            <tr>
                                <td><input type="radio"></td>
                                <td>10:00</td>
                                <td>Heitor</td>
                                <td>Sala 4</td>
                                <td>Terminado</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
    </div>
</body>

</html>