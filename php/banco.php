<?php
// programa que se comunica ao banco de dados da aplicação negociação de mercadorias online
// Daniel Dias de Souza - 04/09/2017 -  Versão 1.0

// variaveis do servidor
$servidor = "localhost";
$usuario = "id1421076_db_mercado";
$senha = "mercado";
$banco = "id1421076_db_mercado";

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco); // conexao com o banco de dados

if (mysqli_connect_errno($conexao)) {// ouve algum erro na conexão?
	echo "Problemas para conectar no banco. Verifique os dados!";
	die();
}

// Função que salva os dados no banco de dados
// Parametros:
// 		Entrada:
//			$conexao - variavel de conexao ao banco de daods
//			$dados -  vetor com os dados a ser salvo
//
function SQLsalvar($conexao, $dados) {
	$sqlgravar = "
		INSERT INTO tb_mercadoria
		(n_codimerc, c_tipomerc, c_nomemerc, n_qtdemerc, n_precmerc, b_negomerc)
		values
		({$dados['nCodigo']}, '{$dados['sTipo']}', '{$dados['sNome']}', {$dados['nQuantidade']}, {$dados['nPreço']}, {$dados['bTipo']})
	"; // comando MySQL para inserir dados na tabela tb_mercadoria
	mysqli_query($conexao, $sqlgravar); // executa o comando acima no banco de dados
}

// Função que busca os dados no banco de dados
// Parametros:
// 		Entrada:
//			$conexao - variavel de conexao ao banco de dados
//		Saida:
// 			$taredas - matriz com todos os dados da tabela tb_mercadoria
//
function SQLdados($conexao){
	$sqlBusca = "SELECT * FROM tb_mercadoria";// comando MySQL para pegar todos os dados da tabela tb_mercadoria
	$resultado = mysqli_query($conexao, $sqlBusca); // executa o comando acima e atribui a variavel $resultado

	$tarefas = array(); //array que ira ter os dados da tabela

	while ($tarefa = mysqli_fetch_assoc($resultado)) {// enquanto não percorrer toda a tabela
		$tarefas[] = $tarefa; // adiciona os dados da tabela
	}
	return $tarefas; // retorna a matriz com todos os dados da tabela
}

