<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Mês', 'Pacientes'],

          <?php 

            include("conexao.php");

            $sql = "SELECT * FROM graficosdashboard";
            $busca = $mysqli->query($sql) or die ($mysqli->error); 

            while($dados = mysqli_fetch_array($busca)) {
                $mes = $dados['mes'];
                $pacientes = $dados['clientesAtendidos']
            ?>

          ['<?php echo $mes ?>', <?php echo $pacientes ?>],

          <?php } ?>

        ]);

        var options = {
          chart: {
            title: 'Pacientes atendidos',
            displayExactValues: true,
            'showRowNumber': false,
             'allowHtml': true, 
             is3D: true,
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
    <link rel="stylesheet" href="/css/index.css">
  </head>
  <body>
    <div id="columnchart_material" style="margin-left: 3em; width: 50%; display: block;"></div>
  </body>
</html>
