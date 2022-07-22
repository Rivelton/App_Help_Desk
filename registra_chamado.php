<?php 
	
	/*echo "<pre>";
	print_r($_POST);
	echo "</pre>";*/

	
	//Aqui é um filtro para não misturar o = em possiveis strings
	//Tratando o texto que vai ser escrito
	$titulo = str_replace(' = ', ' # ', $_POST['Título']);
	$categoria = str_replace(' = ', ' # ', $_POST['Categoria']);
	$descricao = str_replace(' = ', ' # ', $_POST['Descrição']);

	//Aqui cria uma string separada por =
	$texto = $titulo . ' = ' . $categoria . ' = ' . $descricao . PHP_EOL;

	//Aqui cria o arquivo, define oque o fopen vai fazer, depois defini onde vai ser escrito e oque 
	//vai ser escrito, na função fwrite, e por ultimo fecha o arquivo.
	$arquivo = fopen('arquivo.hd', 'a');

	fwrite($arquivo, $texto);

	fclose($arquivo);

	//echo $texto;

	//redirecionamento
	header('Location: abrir_chamado.php')

?>