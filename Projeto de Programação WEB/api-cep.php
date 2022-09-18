<?php 

    $meuCep = $_POST["txCep"];

    $url = "https://viacep.com.br/ws/$meuCep/json/";
    $json = file_get_contents($url);    
    $data = json_decode($json);
    
    $rua = $data->logradouro ;
    $bairro = $data->bairro ;
    $local = $data->localidade ;
    $uf = $data->uf;
    
?>
<?php 
	include("cabecalho.php");
	include("menu.php");
	include("conexao.php");
?>

    <section> 
	<div class="formulario" id="cep">
		<h1 class="estilo-h1"> ViaCep </h1>
		<form action="" method="">
			<div>
				<p>CEP:</p>
				<input type="text" class="preencher" disabled="disabled" value="<?php echo $meuCep; ?>"/>
			</div>

			<div>
				<p>Logradouro:</p>
				<input type="text" name="logradouro" class="preencher" disabled="disabled" value="<?php echo $rua; ?>"/>
			</div>

			<div >
				<p>Bairro:</p>
				<input type="text" name="bairro" class="preencher" disabled="disabled" value="<?php echo $bairro; ?>"/>
			</div>
            <div >
				<p>Localidade:</p>
				<input type="text" name="localidade" class="preencher" disabled="disabled" value="<?php echo $local; ?>"/>
			</div>
            <div >
				<p>UF:</p>
				<input type="text" name="uf" class="preencher" disabled="disabled" value="<?php echo $uf; ?>"/>
			</div>

			<a href="cep-exibir.php"><div >
                <input type="submit" value="Nova Pesquisa" class="button" />
			</div></a>
			
        
		</form>
	</div>

</section>

<?php include("rodape.php");?>