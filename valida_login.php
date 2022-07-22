<?php 
	//_Get e _Post são chamados de superglobais.
	
	session_start();


	//usuarios do sistema

	$_POST['email'];
	$_POST['senha'];


	//variavel que verifica se a autenticação foi relizada
	$usuarios_autenticado = false;


	//aqui esta simulando um banco de dados.
	$usuarios_app = array(
		array('email' => 'adm@teste.com.br', 'senha' => '123456fgt'),
		array('email' => 'user@teste.com.br', 'senha' => 'abcd'),
	);


	//aqui é um foreach so pra cretificar se esta puxando os dados corretamente
	/*foreach($usuarios_app as $user) {
		print_r($user);
		echo '<hr>';
	}*/


	//teste para saber se o login e senha esta dentro do array simulado de banco de dados
	foreach($usuarios_app as $user) {

		if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
			$usuarios_autenticado = true;
		}
	}

	if ($usuarios_autenticado) {
		echo 'Usuário autenticado';
		$_SESSION['autenticado'] = 'SIM';//variavel que verificar se esta ou não logado.
	} else {
		// header, redireciona para a pagina definida, e depois do ? defini um parametro, para o $_GET
		$_SESSION['autenticado'] = 'NÃO';//variavel que verificar se esta ou não logado.
		header('Location: index.php?login=erro');
	}

	/* Evitar usar Get, pois fica esposto os dados nas urls

	$_GET['email'];
	$_GET['senha'];
	*/


	// os dados Html, precisam ter names, para que o method post consiga recuperalos.
	
?>