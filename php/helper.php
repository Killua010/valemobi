<?php
// programa com funções que auxiliam o uso da aplicação negociação de mercadorias online
// Daniel Dias de Souza - 04/09/2017 -  Versão 1.0

// Função que traduz o tipo do negocio
// Parametros
//		Entrada: $tipo - variavel booleana 
//		Saida: retorna compra ou venda
//
function traduzTipo($tipo) {
	if ($tipo == 0) { // variavel é igual a ?
		return "Venda"; // retorna Venda
	} else { // variavel é igual a 1
		return "Compra"; // retorna compra
	}
}

// Função que traduz o tipo float do DB para dinheiro 
// Parametros:
// 		Entrada: $text - variavel numerica do tipo float
// 		Saida: variavel com R$ e , no lugar de .
//
function textToMoney($text){
	$text = str_replace(".",",",$text); // troca o . por ,
	return "R$" . $text; // retorna R$ e a variavel com o valor
}