<?php 
    session_start();

    $servidor="localhost";
	$banco="banco";
	$usuario="root";
	$senha="";
    $pdo = new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha);

    $Usuario = $_POST["txUsuario"];
    $Senha = $_POST["txSenha"];

    $stmt = $pdo->prepare("select count(*) from tbuser where usuario ='$Usuario' and senha ='$Senha'");
    $stmt->execute();
    $row = $stmt ->fetch(PDO::FETCH_NUM);

    echo $row [0];
    
    if( $row[0] > 0 )
            {
                $_SESSION['txUsuario'] = $Usuario;
                $_SESSION['txSenha'] = $Senha;
                echo "<script> alert('Existe') </script>";
                echo "<script>location.href='pgControle.php'</script>";
                exit;
            }
            else{
                unset ($_SESSION['txUsuario']);
                unset ($_SESSION['txSenha']);
                echo "<script> alert('NÃO Existe') </script>";
                echo "<script>location.href='index.php'</script>";
                exit;

            }


  
	include("rodape.php");
	

?>