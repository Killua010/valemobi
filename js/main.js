/* 
* JavaScript da Plataforma de negociação de mercadorias online
* Daniel Dias de Souza - 04/09/2017 -  Versão 1.0
*/

var erros = []; // array de verificação de erros

// Função que pega os dados do formulario
// Parametros:
// 		Saida: bool bVerificar - false = há erros nos campos do formulario - true = não há erros nos campos
// 	
function dados(){
	var tbDados = {// objeto para pegar os dados do formulario
		"nCodigo" : "$('nCodigo')",
		"sTipo" : "$('sTipo')",
		"sNome" : "$('sNome')",
		"nQuantidade" : "$('nQuantidade')",
		"nPreço" : "$('nPreço')",
		"bTipo" : "$('bTipo')"
	}
	var bVerificar = verificar(tbDados); // variavel com aconsistencia dos dados
	if (!bVerificar) { // houve erro na consistencia ?
		var err = document.getElementById("erro");
		err.innerHTML = erros;
		err.className = "alert alert-danger";
		// mensagem para o usuario de que ouve erro no formulario
	}
	return bVerificar; // retorna true ou false
}

// Função que consiste os dados da tabela
// Parametros:
// 		Entrada: tbDados - objeto com os dados do formulario
//		Saida: bool - true = não há erros - false = há erros
//
function verificar(tbDados){
	erros = [];
	if (nCodigo.value === "" || sTipo.value === "" || sNome.value === "" || 
		nQuantidade.value === "" || nPreço.value === "" || bTipo.value === "") { // existe algum campo em branco?
		erros.push("Campo vazio"); // mensagem para o usuario "Campo vazio"
		return false; 
	} else if (isNaN(nCodigo.value) || isNaN(nQuantidade.value) || isNaN(nPreço.value)) { // existe algum caracter em um campo somente numerico ?
		erros.push("Caracter no campo numerico"); // mensagem para o usuario "Caracter no campo numerico"
		return false;
	} else if((parseInt(nQuantidade.value) < 1 || parseInt(nQuantidade.value) > 999) || 
	          (parseMoneytoText(nPreço.value) < 1 || parseMoneytoText(nPreço.value) > 999)){ // quantidade ou preço negativo ou maior que 999?
		erros.push("Quantidade invalida"); // mensagem para o usuario quantidade invalida
		return false;
	}
	return true;
}







