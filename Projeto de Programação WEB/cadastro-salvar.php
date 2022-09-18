<?php
    session_start();
    $User = $_POST["txUser"];
    $Senha = $_POST["txSenha"];
    $ConfSenha = $_POST["txConfSenha"];

    $servidor="localhost";
	$banco="banco";
	$usuario="root";
	$senha="";
    $con = mysqli_connect("localhost", "root", "", "banco");
    $pdo = new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha);


    if ($ConfSenha == $Senha){
        $query = "SELECT * FROM tbuser WHERE usuario = '$User'";
        $result = mysqli_query($con,$query);
        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                echo '
                <script type="text/javascript">
                    alert("Usuário já existe!!"); 
                </script>';
                echo "<script>location.href='cadastro-exibir.php'</script>";
                exit;
            } else {
                $stmt = $pdo->prepare("insert into tbuser values(null,'$User', '$Senha')");
                $stmt->execute();
                echo '
                    <script type="text/javascript">
                        alert("Registro Incluído com Sucesso!!!"); 
                    </script>
                ';
                echo "<script>location.href='pgControle.php'</script>";
                exit;
        }
        } else {
        echo 'Error: '.mysqli_error();
        }
    }
    else {
        echo '
            <script type="text/javascript">
                alert("Senha não confere!!!"); 
            </script>
        ';
        echo "<script>location.href='cadastro-exibir.php'</script>";
        exit;

    }
 
?>
<?php
   
	
    session_unset();
    session_destroy();
?>