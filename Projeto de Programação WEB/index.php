<?php 
    session_start();
	include("cabecalho.php")
	?>
<section>
	<div class="formulario" id="login">
		<h1 class="estilo-h1"> Login </h1>
		<form action="login-conf.php" method="post">
			<div >
				<p>Nome:</p>
				<input type="text"  name="txUsuario" class="preencher" required/>
			</div>

			<div >
				<p>Senha:</p>
				<input type="password"  name="txSenha" class="preencher" required/>
			</div>

			<div>
				<input type="submit" value="Entrar" class="button"/>
			</div>

		</form>
	</div>
</section>
<?php 

  include("rodape.php") 
?>
