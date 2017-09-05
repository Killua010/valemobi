<?php 
	$activeHome = ""; //coloca a classe active no link da tag NAV "a" lista de operações
	$activeOper = "active"; // retira a classe active no link da tag NAV "a" home
	include "php/dadosMercadoria.php"; // inclue os dados da mercadoria	
	include "php/helper.php";  // inclue as funçoes assistentes
	include "cabecalho.php"; // inclue o cabeçalho a pagina
?>
		<div class="container-side">
		<?php foreach($resultados as $resultado): // percorre todos os dados do DB ?>		
			<table class="table hide-sm"><!-- Inicio da tabela DESKTOP -->
				<?php if($resultado["b_negomerc"] == 1): // O dado atual é do tipo compra ? ?>
					<?php $tipo = "success" // adiciona a classe success para o conteudo do dado ?>

					<thead class="bg-<?php echo $tipo ?>">
						<th scope="row" colspan="6"><?php echo traduzTipo($resultado["b_negomerc"]); ?></th>							
					</thead>
				<?php else: // o dado é do tipo venda ? ?>
					<?php $tipo = "primary" // adiciona a classe primary para o conteudo do dado ?>

					<thead class="bg-<?php echo $tipo ?>">
						<th scope="row" colspan="6"><?php echo traduzTipo($resultado["b_negomerc"]); ?></th>							
					</thead>
				<?php endif; // fim if ?>			
				<tr class="table-<?php echo $tipo ?>"><!-- Linha para o tipo do dado -->
					<td>Código da mercadoria</td>
					<td>Tipo da mercadoria</td>
					<td>Nome da mercadoria</td>
					<td>Quantidade</td>
					<td>Preço</td>
					<td>Tipo de Negocio</td>
				</tr>
				<tr class="table-<?php echo $tipo ?>"><!-- Linha para o resultado do dado -->
					<td><?php echo $resultado["n_codimerc"]; ?></td>
					<td><?php echo $resultado["c_tipomerc"]; ?></td>
					<td><?php echo $resultado["c_nomemerc"]; ?></td>
					<td><?php echo $resultado["n_qtdemerc"]; ?></td>
					<td><?php echo textToMoney($resultado["n_precmerc"]); ?></td>
					<td><?php echo traduzTipo($resultado["b_negomerc"]); ?></td>
				</tr>
			</table><!-- fim da tabela DESKTOP -->

			<table class="table hide-lg-table"> <!-- Inicio da tabela Responsive -->
				<?php if($resultado["b_negomerc"] == 1): // O dado atual é do tipo compra ? ?>
					<?php $tipo = "success" // adiciona a classe success para o conteudo do dado ?>

					<thead class="bg-<?php echo $tipo ?>">
						<tr>
							<th scope="row" colspan="2"><?php echo traduzTipo($resultado["b_negomerc"]); ?></th>							
						</tr>
					</thead>
				<?php else: // o dado é do tipo venda ? ?>
					<?php $tipo = "primary" // adiciona a classe primary para o conteudo do dado ?>

					<thead class="bg-<?php echo $tipo ?>">
						<tr>	
							<th scope="row" colspan="2"><?php echo traduzTipo($resultado["b_negomerc"]); ?></th>							
						</tr>
					</thead>
				<?php endif; // fim if ?>
				<tbody>	
					<tr class="table-<?php echo $tipo ?>">
						<th>Código da mercadoria</th>
						<td><?php echo $resultado["n_codimerc"]; ?></td>
					</tr>
					<tr class="table-<?php echo $tipo ?>">
						<th>Tipo da mercadoria</th>
						<td><?php echo $resultado["c_tipomerc"]; ?></td>
					</tr>
					<tr class="table-<?php echo $tipo ?>">
						<th>Nome da mercadoria</th>
						<td><?php echo $resultado["c_nomemerc"]; ?></td>
					</tr>
					<tr class="table-<?php echo $tipo ?>">
						<th>Quantidade</th>
						<td><?php echo $resultado["n_qtdemerc"]; ?></td>
					</tr>
					<tr class="table-<?php echo $tipo ?>">
						<th>Preço</th>
						<td><?php echo textToMoney($resultado["n_precmerc"]); ?></td>
					</tr>
					<tr class="table-<?php echo $tipo ?>">
						<th>Tipo de Negocio</th>
						<td><?php echo traduzTipo($resultado["b_negomerc"]); ?></td>
					</tr>
				</tbody>
			</table><!-- Fim da tabela responsive -->



		<?php endforeach; // fim do for resultados ?>
		</div>		
		<!-- Declaração javascript -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> <!-- JS Biblioteca Jquery -->	
		<script type="text/javascript" src="js/main.js"></script><!-- JS Próprio -->	
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script><!-- JS Biblioteca Popper -->
		<script type="text/javascript" src="js/bootstrap.min.js"></script><!-- JS BootStrap 4 -->
	</body>
</html>