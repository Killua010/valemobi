<?php 
	$activeHome = "active"; //coloca a classe active no link da tag NAV "a" home
	$activeOper = ""; // retira a classe active no link da tag NAV "a" lista de operações
	include "cabecalho.php";// inclui o cabeçalho a pagina
?>

		<div class="jumbotron">
			<div class="container-side">
				<form method="POST" onsubmit="return dados();"><!-- Inicio do formulario -->
					<fieldset class="col-xs-12">
						<legend><h1>Dados da mercadoria</h1></legend>
						<div id="erro"></div>
						<br>
						<div class="form-row"><!-- Inicio linha para 2 inputs -->
							<div class="col-md-6">
								<label>
									<h4 class="none-margin">Código da mercadoria:</h4>
								</label>
								<input type="number" name="nCodigo" id="nCodigo" class="form-control"><!-- input do código da mercadoria somente numeros -->
							</div>
							<div class="col-md-6">
								<label>
									<h4 class="none-margin">Tipo da mercadoria:</h4>
								</label>
								<input type="text" name="sTipo" id="sTipo" class="form-control"><!-- input tipo da mercadoria qualquer caracter -->
							</div>
						</div><!-- Fim linha para 2 inputs -->
						<div class="form-row"><!-- Inicio linha para 2 inputs -->
							<div class="col-md-6">
								<label>
									<h4 class="none-margin">Nome da mercadoria:</h4>
								</label>
								<input type="text" name="sNome" id="sNome" class="form-control"><!-- input nome da mercadoria qualquer caracter -->				
							</div>
							<div class="col-md-6">
								<label>
									<h4 class="none-margin">Quantidade:</h4>
								</label>
								<input type="number" name="nQuantidade" id="nQuantidade" min="1" max="999" class="form-control"><!-- input quantidade somente numeros > 0 e < 999 -->
							</div>
						</div><!-- fim linha para 2 inputs -->
						<div class="form-row"><!-- Inicio linha para 2 inputs -->
							<div class="col-md-6">
								<label>
									<h4 class="none-margin">Preço:</h4>
								</label>								
								<div class="input-group">
  									<span class="input-group-addon">R$</span>
									<input type="number" step=0.01 name="nPreço" id="nPreço" class="form-control" max="999"><!-- input para o preço numeros com ponto flutuande -->
								</div>
							</div>
							<div class="col-md-6">
								<label >
									<h4 class="none-margin">Tipo de Negocio:</h4>
								</label>
								<select name="bTipo" id="bTipo" class="form-control"><!-- select option tipo de negocio 0 = venda; 1 = compra -->
									<option value="0">Venda</option>
									<option value="1">Compra</option>
								</select>								
							</div>
						</div><!-- Fim linha para 2 inputs -->
						<input type="submit" class="btn btn-dark btn-lg btn-padding" name="tbEnviar" id="tbEnviar">
					</fieldset>
				</form><!-- Fim formulario -->				
			</div>
		</div>
		<!-- Declaração javascript -->		
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> <!-- JS Biblioteca Jquery -->	
		<script type="text/javascript" src="js/main.js"></script><!-- JS Próprio -->	
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script><!-- JS Biblioteca Popper -->
		<script type="text/javascript" src="js/bootstrap.min.js"></script><!-- JS BootStrap 4 -->		
	</body>
	<?php 
		include "php/formulario.php" //arquivo para enviar os dados ao banco de dados
	?>
	
</html>
