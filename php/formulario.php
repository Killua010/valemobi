<?php
// programa que salva os dados no DB da aplicação negociação de mercadorias online
// Daniel Dias de Souza - 04/09/2017 -  Versão 1.0

include 'banco.php';// inclui o programa que se comunica com o DB

if (isset($_POST["bTipo"])) {// O usuario clicou em enviar e passou na consistencia JavaScript?
	$produto = array();// array para armazenar os dados do formulario
	$produto["nCodigo"] = $_POST["nCodigo"];
	$produto["sTipo"] = $_POST["sTipo"];
	$produto["sNome"] = $_POST["sNome"];
	$produto["nQuantidade"] = $_POST["nQuantidade"];
	$produto["nPreço"] = $_POST["nPreço"];
	$produto["bTipo"] = $_POST["bTipo"];
	// atribui ao $produto os dados do formulario
	SQLsalvar($conexao, $produto); // chama a função que salva os dados no DB
	echo "<script language='javascript' type='text/javascript'>window.location.href='operacoes.php'</script>"; // retireciona a pagina operações
}
