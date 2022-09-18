<?php 
	include("cabecalho.php");
	include("menu.php");
  include("conexao.php")
?>
<html>
<head>
  <?php
      $conexao = mysqli_connect("localhost","root","","escola_func");
      // efetua a consulta da tabela categoria
      $sql1 = "SELECT * FROM tbprofessor ORDER BY id";
      $sql2 = "SELECT * FROM tbauxiliarlimpeza ORDER BY id";
      $sql3 = "SELECT * FROM tbcoordenador ORDER BY id";
      $sql4 = "SELECT * FROM tbdiretor ORDER BY id";
      $sql5 = "SELECT * FROM tbinspetor ORDER BY id";
      $sql6 = "SELECT * FROM tbmerendeiro ORDER BY id";
      $sql7 = "SELECT * FROM tbsecretario ORDER BY id";
      $sql8 = "SELECT * FROM tbvigia ORDER BY id";

      $res_prof = mysqli_query($conexao, $sql1);
      $res_auxiliar = mysqli_query($conexao, $sql2);
      $res_coordenador = mysqli_query($conexao, $sql3);
      $res_diretor = mysqli_query($conexao, $sql4);
      $res_inspetor = mysqli_query($conexao, $sql5);
      $res_merendeiro = mysqli_query($conexao, $sql6);
      $res_secretario = mysqli_query($conexao, $sql7);
      $res_vigia = mysqli_query($conexao, $sql8);

      
      // total de resultados
      $total_prof = mysqli_num_rows($res_prof);
      $total_auxiliar = mysqli_num_rows($res_auxiliar);
      $total_coordenador = mysqli_num_rows($res_coordenador);
      $total_diretor = mysqli_num_rows($res_diretor);
      $total_inspetor = mysqli_num_rows($res_inspetor);
      $total_merendeira = mysqli_num_rows($res_merendeiro);
      $total_secretario = mysqli_num_rows($res_secretario);
      $total_vigia = mysqli_num_rows($res_vigia);
  ?>	

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Cat', 'Num'],
          ['Professores', <?php echo $total_prof; ?>],
          ['Auxiliares de Limpeza', <?php echo $total_auxiliar; ?>],
          ['Coordenadores',  <?php echo $total_coordenador; ?>],
          ['Diretores', <?php echo $total_diretor; ?>],
          ['Inspetores',    <?php echo $total_inspetor; ?>],
          ['Merendeira', <?php echo $total_merendeira; ?>],
          ['Secretárias', <?php echo $total_secretario; ?>],
          ['Vigia', <?php echo $total_vigia; ?>]
        ]);

        var options = {
          title: 'Porcentagem de Funcionários de Uma Escola',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
</head>
<body>
<div id="donutchart" style="margin-left: 300px; margin-top: 100px; width: 1000px; height: 400px;"></div>

<?php include("rodape.php")  ?>
