<?php
    include("../conexao.php"); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Produto Escolhido</h1>

    <?php
        $id = $_GET['idProduto'];
        //$produto = $_GET['produto'];

        //echo $id . " " . $produto;

        try{
            $stmt = $pdo->prepare("SELECT * from tbProduto where idProduto = $id");
            $stmt ->execute();

            while($row = $stmt -> fetch(PDO::FETCH_BOTH)){
    ?>
    <h2><?php echo $row['produto'];?></h2>
    <p> <?php echo $row['idCategoria']?></p> <!--idCategoria-->
    <!--<p><?php //echo $row['descrPro'];?></p>-->
    <p>R$ <?php echo $row['valor'];?></p>

    <?php
            }
        }
        catch(PDOExeption $e){
            echo "Erro: " . $e -> getMessage();
        }
    ?>

</body>
</html>