<?php 
	session_start();
	include("cabecalho.php");
?>

<section>
	<div class="formulario" id="cadastro">
		<h1 class="estilo-h1"> Cadastrar </h1>
		<form action="cadastro-salvar.php" method="post">
			<div >
				<p>Nome:</p>
				<input type="text"  name="txUser" class="preencher" required/>
			</div>

			<div >
				<p>Senha:</p>
				<input type="password"  name="txSenha" class="preencher" required/>
			</div>

			<div >
				<p>Confirmar Senha:</p>
				<input type="password"  name="txConfSenha" class="preencher" required/>
			</div>

			<div>
				<input type="submit" value="Salvar" class="button"/>
			</div>
		</form>
	</div>
</section>
<?php
    include("rodape.php");
	
    session_unset();
    session_destroy();
?>