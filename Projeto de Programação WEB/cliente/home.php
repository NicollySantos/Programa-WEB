<?php
    include("../conexao.php"); 
    include("cabecalho.php");
    include("menu.php");
?>
    <section id="sec-destaque">
        <div id="destaque">
            <h1>Produtos em destaque <a href="todos-produtos.php"> Ver todos</a></h1>
        </div>
        <section id="sec-produto">
            <?php
                try{
                    $stmt = $pdo->prepare("SELECT p.idProduto, p.produto, c.categoria, p.valor, p.imgPro
                    from tbProduto p 
                    inner join tbcategoria c 
                    on p.idCategoria = c.idCategoria 
                    order by idProduto desc");	//"select * from tbProduto order by idProd desc limit 5"
                    $stmt ->execute();

                    while($row = $stmt -> fetch(PDO::FETCH_BOTH)){
            ?>
            <div id="div-produtos">
                <a href="produto-escolhido.php?idProduto=<?php echo $row['idProduto'];?>&produto=<?php echo $row['produto'];?>">
                    <figure class="coli-3">
                        <div>
                            <img src="<?php echo $row['imgPro']?>" title="<?php echo $row['produto'];?>">
                        </div>
                        <figcaption>
                            <p id="produto"><?php echo $row['produto'];?></p>
                            <p id="valor">R$ <?php echo $row['valor'];?></p>
                            <p id="categoria"> <?php echo $row['categoria']?></p> <!--idCategoria-->
                        </figcaption>
                    </figure>
                </a>
            </div>
            

            <?php
                    }
                }
                catch(PDOExeption $e){
                    echo "Erro: " . $e -> getMessage();
                }
            ?>
        </section>
    </section>

    <footer>
        <p>Rodapé</p>
    </footer>
</body>
</html>
<?php
    
    
            /*echo "<h1 style='color:af00;'>" . $row['idProd'] . "</h1>";
            echo "<p>" . $row['imgPro'] . "</p>";
            */
            

        
?>