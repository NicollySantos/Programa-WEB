<?php 
  session_start();
	include("cabecalho.php");
	include("menu.php");
  include("conexao.php")
?>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Cat', 'porcentagem'],
          ['Informática e Comunicação',     19],
          ['Livraria e Papelaria',      4],
          ['Móveis e Eletrodomésticos',  5],
          ['Vestuário e Calçados', 4],
          ['Artigos de uso pessoal e doméstico',    7],
          ['Farmácias, perfumaria e cosméticos', 6],
          ['Supermercados, produtos alimentícios e bebidas', 5]
        ]);

        var options = {
          title: 'Alguns tipos de produtos mais vendidos no Brasil durante a Pandemia',
          is3D: true,
          width: 500,
          height: 500,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>

  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "porcentagem", { role: "style" } ],
        ["dez/19", 5.0, "#12109c"],
        ["jan/20", 6.7, "#12109c"],
        ["fev/20",6.0, "#12109c"],
        ["mar/20", 7.2, "#12109c"],
        ["abr/20", 11.1, "#12109c"],
        ["mai/20", 12.6, "#12109c"],
        ["jun/20", 11.2, "#12109c"],
        ["jul/20", 10.7, "#12109c"],
        ["ago/20", 9.9, "#12109c"],
        ["set/20", 9.4, "#12109c"],
        ["out/20", 8.6, "#12109c"],
        ["nov/20", 14.4, "#12109c"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Participação do e-commerce nas vendas totais no ano de 2020",
        width: 500,
        height: 500,
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
</script>
</head>
<body>
  <div id="piechart_3d" style="margin-left: 400px; margin-top:10px; width: 500px; height: 500px;"></div>
  <div id="columnchart_values" style="margin-left:460px; width: 500px; height: 500px;"></div>

  <section>
    <div id="index">
      <h1 class="estilo-h1">Resultados</h1>
      <table id="resul">
        <tr>
          <td><img src="img/produtos.png" alt="" id="produtos"></td>
          <td><img src="img/dinheiro.png" alt="" id="dinheiro"></td>
        </tr>
        <tr id="texto">
          <td >
            <?php
              $stmt = $pdo->prepare("select count(*) from tbProduto");	
              $stmt ->execute();
              
              $row = $stmt ->fetch(PDO::FETCH_NUM);

              echo "Total de produtos: </br> <b>$row[0]</b>";			
            ?>
          </td>
          <td>
            <?php
              $stmt2 = $pdo->prepare("select sum(valor) from tbProduto");	
              $stmt2 ->execute();
              
              $row2 = $stmt2 ->fetch(PDO::FETCH_NUM);

              echo "Soma dos valores dos produtos: </br><b>R$$row2[0]</b>";			
            ?>
          </td>
        </tr>
      </table>
    </div>
      
  </section>


<?php 


  include("rodape.php") 
?>
