<?php 
	
	session_start();

	/*echo '<pre>';
	print_r($_SESSION);
	echo'</pre>';*/



	//remover 1 índices do array de sessão, so destroi se existir, caso contrario não da erro.
	//unset()

	//destruir a variável de sessão
	//session_destroy()
	// o session_destroy sempre acompanha de um redirecionamento, pois ela so destroi a session
	//quando a pagina é atualizada.

	session_destroy();
	header("Location: index.php");


?>