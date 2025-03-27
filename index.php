<?php
	ini_set('display_errors', 1);
	/* 
		O require e o include os dois importam scripts PHP. 
		! A ordem importa.
		! As variáveis de um, podem afetar outros arquivos.
		! Include não causa interrupção do script quando falha
		! O require causa interrupção do script quando falha
		! O sufixo _once garante com que os scripts sejam importados apenas uma vez.
	*/

	// **Escopo global é o escopo que não está atrelado a:
	// *Nenhuma função
	// *Nenhum objeto
	// *Nenhum laço de repetição
	include_once('template-parts/header.php');
	echo "Olá Mundo!";
	require('template-parts/footer.php');


	//Chamando a classe
	require_once('classExample.php');
	// Instanciamento - A materialização de uma classe em um objeto.
	$primeiraTarefa = new Tarefa();
	$primeiraTarefa->defineTarefa("Continuar estudando POO");
	// Chamada de um método de uma tarefa específica.
	$primeiraTarefa->exibeTarefa();
	$primeiraTarefa->alteraStatus();
?>
<br />
<?php
	$primeiraTarefa->exibeTarefa();
?>