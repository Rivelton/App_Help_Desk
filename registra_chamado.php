<?php 
	
	/*echo "<pre>";
	print_r($_POST);
	echo "</pre>";*/

	session_start();
	//Aqui é um filtro para não misturar o = em possiveis strings
	//Tratando o texto que vai ser escrito
	$titulo = str_replace(' = ', ' # ', $_POST['Título']);
	$categoria = str_replace(' = ', ' # ', $_POST['Categoria']);
	$descricao = str_replace(' = ', ' # ', $_POST['Descrição']);



	if (strlen($_POST['Título']) != 0 && strlen($_POST['Categoria']) != 0 && strlen($_POST['Descrição']) != 0 ) {
		$texto = $_SESSION['id'] . ' = ' . $titulo . ' = ' . $categoria . ' = ' . $descricao . PHP_EOL;
	}
	

	//Aqui cria uma string separada por =
	

	//Aqui cria o arquivo, define oque o fopen vai fazer, depois defini onde vai ser escrito e oque 
	//vai ser escrito, na função fwrite, e por ultimo fecha o arquivo.
	$arquivo = fopen('../../app_help_desk/arquivo.hd', 'a');

	fwrite($arquivo, $texto);

	fclose($arquivo);

	//echo $texto;

	//redirecionamento
	header('Location: abrir_chamado.php');

?>