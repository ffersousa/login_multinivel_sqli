<?php //include  './checkLogin.php'; 

?>
 <?php 
		      error_reporting(0); // Não mostra  avisos.
		      session_start();
		      echo "<a class= 'ml-3 text-success ' >Olá {$_SESSION['user']['username']}!</a>";
?>

<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="UTF-8" />
    <title> Menu  </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 </head>


<html>

<body>

<header>
  
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
      
        <a class="navbar-brand" href="../menus/menu_admin_principal.php">Início </></li>
        <a class="navbar-brand" href="../login/inseredados.php">Inserir</a> 
        <a class="navbar-brand" href="../login/mostrardados.php">Mostrar</a>
        <a class="navbar-brand" href="../login/logout.php">Logout</a>         
    </nav>
    
  </header>  
   <section >
       

</section>
</body>
</html>