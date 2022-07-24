<?php 
  session_start();

  if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM'){
      header('Location: index.php?login=erro2');
    }

  // Serve para não poder ter acesso a pagina se não estiver logado, esse arquivo PHP a parte chama-se refatorar, que é aproveitar o codigo igual, em varios arquivos diferentes, quando a mesma logica é aplicada.


?>

<!-- Serve para não poder ter acesso a pagina se não estiver logado, esse arquivo PHP a parte chama-se refatorar, que é aproveitar o codigo igual, em varios arquivos diferentes, quando a mesma logica é aplicada.-->