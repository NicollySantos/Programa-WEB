<? 
include "funcao.php";

if(strlen($_POST['nome']))
{
    if(sendMail($_POST['email'],'seuemail@gmail.com', $_POST['mensagem'], 'Formulário de contato'))
    {
        echo "Sua mensagem foi enviada com sucesso!";
    }
    else
    {
        echo "Ocorreu um erro ao enviar";
        echo "<br><a href='pgContato.php'>Voltar</a>";
    }
   
}
 exit();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Formulário de Contato </title>
	<meta charset="iso-8859-1">
	<link rel="stylesheet" href="css/estilo.css"  type="text/css" media="all" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body>
	<h2>Formulário de contato </h2>
	
    <form method="post" id="formulario_contato" onsubmit="validaForm(); return false;" class="form">
		<p class="name">
            <label for="name">Nome</label>
            <input type="text" name="nome" id="nome" placeholder="Seu Nome" />
		</p>
		
		<p class="email">
            <label for="email">E-mail</label>
            <input type="text" name="email" id="email" placeholder="mail@exemplo.com.br" />
		</p>		
	<p class="text">
            <label for="mensagem">Assunto</label>
            <textarea name="mensagem" id="assunto" placeholder="Escreva sobre o assunto" /></textarea>
		</p>
		
		<p class="text">
            <label for="mensagem">Mensagem</label>
            <textarea name="mensagem" id="mensagem" placeholder="Escreva sua mensagem" /></textarea>
		</p>
		
		<p class="submit">
            <input type="submit" value="Enviar" />
		</p>
	</form>
    <script type="text/javascript">
        function validaForm()
        {
            erro = false;
            if($('#nome').val() == '')
            {
                alert('Você precisa preencher o campo Nome');erro = true;
            }
            if($('#email').val() == '' && !erro)
            {
                alert('Você precisa preencher o campo E-mail');erro = true;
            }
            if($('#assunto').val() == '' && !erro)
            {
                alert('Você precisa preencher o campo Assunto');erro = true;
            }
            if($('#mensagem').val() == '' && !erro)
            {
                alert('Você precisa preencher o campo Mensagem');erro = true;
            }
            //se nao tiver erros
            if(!erro)
            {
                $('#formulario_contato').submit();
            }
        }
    </script>
</body>
</html>