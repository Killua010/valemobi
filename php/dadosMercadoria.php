<?php
// programa que  pega os dados do DB da aplicação negociação de mercadorias online
// Daniel Dias de Souza - 04/09/2017 -  Versão 1.0

include 'banco.php';// inclui o programa que se comunica com o DB
$resultados = SQLdados($conexao); // chama a função que pega os dados do DB e atribui a $resultados
