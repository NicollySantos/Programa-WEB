<?php 
	include("cabecalho.php");
	include("menu.php");
	include("conexao.php");
?>
<section> 
	<div class="formulario" id="cep">
		<h1 class="estilo-h1"> ViaCep </h1>
		<form action="api-cep.php" method="post">
			<div>
				<p>CEP:</p>
				<input type="text" placeholder="Ex:XXXXXXXX" name="txCep" class="preencher" />
			</div>

			<div>
				<p>Logradouro:</p>
				<input type="text" name="logradouro" class="preencher" disabled="disabled" />
			</div>

			<div >
				<p>Bairro:</p>
				<input type="text" name="bairro" class="preencher" disabled="disabled"/>
			</div>
            <div >
				<p>Localidade:</p>
				<input type="text" name="localidade" class="preencher" disabled="disabled"/>
			</div>
            <div >
				<p>UF:</p>
				<input type="text" name="uf" class="preencher" disabled="disabled"/>
			</div>

			<div>
				<input type="submit" value="Procurar" class="button" />
			</div>
		</form>
	</div>

</section>

<?php include("rodape.php");?>