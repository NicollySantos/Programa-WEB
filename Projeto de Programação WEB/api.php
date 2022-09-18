<?php 
	include("cabecalho.php");
	include("conexao.php");

	//echo "<h1> Exibir Categorias </h1>";
?>

<html>
    <head>

</style>
</head>
        <form method="POST" action="" id="mapa_form">
    <label> Endereço:
        <input type="text" name="address">
    
 
    <input type="submit" name="submit_address"></label><br/>

    
</form>

<?php
    if (isset($_POST["submit_address"]))
    {
        $address = $_POST["address"];
        $address = str_replace(" ", "+", $address);
        ?>
 
        <iframe width="100%" height="500" padding-top="100px" src="https://maps.google.com/maps?q=<?php echo $address; ?>&output=embed"></iframe>
 
        <?php
    }
?>

</html>