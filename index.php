<?php
    include("php/conexao.php");

    $consulta = "SELECT * FROM dadosDashboard";
    $con = $mysqli->query($consulta) or die($mysqli->error);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Clínica Peres</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/index.css">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">Clínica Dr. Peres</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Pesquisar..." aria-label="Search for..."
                    aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i
                        class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Ações</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="#!">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>

    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">        
                        <a class="nav-link" href="index.php">
                            Página Inicial
                        </a> 
                        <a class="nav-link" href="agenda/index.php">
                            Pacientes
                        </a>
                        <a class="nav-link" href="calendario/index.php">
                            Agenda de Pacientes
                        </a>
                        <a class="nav-link" href="sobreNos.html">
                            Sobre nós
                        </a>  
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logado com:</div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>

                <div class="container-fluid px-4">
                   <div class="dashboard">
                    <?php while ($dados = $con->fetch_array()) { ?> 
                    <div class="primeiraLinha">
                    <!-- DADOS DA CLINICA -->
                            <div class="dadosClinica">
                                <div class="dado">
                                    <img class="imagemDados"
                                        src="https://cdn-icons-png.flaticon.com/512/1533/1533506.png"
                                        alt="">
                                    <span class="textoDados">Pacientes agendados hoje</span>
                                    <span class="numeroDados"><?php echo $dados["pacientesAgendados"]?> </span>
                                </div>
                                <div class="dado">
                                <img class="imagemDados"
                                        src="https://cdn-icons-png.flaticon.com/512/1533/1533506.png"
                                        alt="">
                                    <span class="textoDados">Pacientes a serem atendidos</span>
                                    <span class="numeroDados" id="numeroAtender"><?php echo $dados["pacientesParaAtender"]?></span>
                                </div>
                                <div class="dado">
                                        <img class="imagemDados"
                                        src="https://images.vexels.com/media/users/3/151981/isolated/preview/f8863741dba8034b3e1d4809a01c782a-icones-medicos-do-icone-do-estetoscopio.png"
                                        alt="">
                                    <span class="textoDados">Médicos em plantão</span>
                                    <span class="numeroDados"><?php echo $dados["medicosPlantao"]?></span>
                                </div>
                            </div>
                     <?php  } ?>
                        <!-- CHAMADA DE PACIENTES -->

                        <div class="chamadaPacientes">
                            <span class="textoChamada">Chamada</span>
                            <h3 id="numeroChamada">0</h3>
                            <button id="botaoChamada">Próximo</button>
                        </div>
                        <div class="entrarChat">
                            <span class="textoDoChat">Converse com a equipe</span>
                            <span class="textoDoChat">Planeje Reuniões ou resolva problemas internos</span>
                            <span class="textoDoChat">
                                    O planejamento de uma equipe em uma clínica psicológica 
                                    é essencial para garantir a eficiência, qualidade e ética
                                    dos serviços prestados. Isso envolve a distribuição adequada
                                    de tarefas, o alinhamento de objetivos
                                    e a comunicação eficaz, permitindo um atendimento
                                    mais completo e satisfatório aos pacientes.</span>
                            <a class="btn btn-outline-info" href="chat/index.php">Ir para o Chat</a>
                        </div>
                         
                    </div>
                    
                    <div class="segundaLinha">
                        <div class="proximoPaciente">
                            <img  class="imagemPaciente" src="https://cdn-icons-png.flaticon.com/512/1533/1533506.png" alt="" srcset="">
                            <span class="nomePaciente">Próximo Paciente</span>
                            <a href="agenda/" id="botaoRelatorio"> Ir para relatório</a>
                        </div>

                        <div class="graficoDashboard">
                            <canvas id="myChart"></canvas>
                        </div>
                        
                    </div>

                </div>
                </div>
                    
        </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['2019', '2020', '2021', '2022', '2023'],
            datasets: [{
            label: 'Crescimento exponencial da procura por terapia nas clínicas Brasileiras',
            data: [343, 320, 452, 620, 812],
            borderWidth: 1
            }]
        },
        options: {
            scales: {
            y: {
                beginAtZero: true
            }
            }
        }
        });
    </script>
    <script src="js/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>