<?php 
session_start();// tenho que fazer sempre session star no inicio de cada pagina
if ($_SESSION['user']['user_type'] == 'ADMIN'){
				include("../menus/menu_admin.php");
			}else{
				include("../menus/menu_user.php");
			}
include  '../database/checkLogin.php';
include  '../database/mysqli.php';

$id = $_GET['id'];

if($id){ // Ver a informação.
	$query = "SELECT * from users WHERE id = $id";
	$sql = $conn->query($query);

	// Podera existir uma forma mais otimizada.
	while ($row = $sql->fetch_row()) {
		$user['id'] = $row[0];
		$user['username'] = $row[1];
		$user['passw'] = $row[2];
	}

} else if($_POST) {
	$id = $_POST['id'];
	$username = $_POST['username'];
	$password = $_POST['passw'];

	if($username != '' && $password != ''){
				
		$sql = "UPDATE users SET username ='$username', passw = '$password' WHERE id = $id ";
		$result = $conn -> query($sql);
		
		if($result){
			echo "Registo atualizado com sucesso";
		} else {
			echo "Erro ao atualizar registo: " . $conn->error;
		}
		
		//header("Location: menu_admin.php \n"); // Não existe o utilizador, redirect  para a página de login.
	}
	
}else{
	// Mandar utilizador para a pagina 404 (nof found)
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
<title>Escola Website - Mostrar dados</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<meta charset="UTF-8">
</head>

<header class= "row">
	
	<div  class= "col-md-6 offset-md-3 text-center bg-light border border-secondary mt-5 col-sm-12"> <!-- offset-md-3 desloca 3 colunas para a direita  -->
         
          <h2>Aplicação Escola</h2>
    </div>

</header>
<main class= "col-md-6 offset-md-3 text-center bg-light border border-secondary mt-5 col-sm-12">

			<section >
						<h6> Alterar dados do utilizador </h6>
					
						<form class= "table" action="alterardados.php" method="post">
							
							<input type="text" hidden name="id" class="input" value="<?= $user['id'] ?>" />
							<label for="name">Utilizador:</label>
							<input type="text" name="username" class="input" value="<?= $user['username'] ?>" />
							<br>
							<label for="name">Nova Password: </label>
							<input type="password" name="passw" class="input" value="" />
							<br>
							<input class="btn btn-info" type="submit" value="Alterar" class="button" />
						</form>
			</section>

</main>
<?php include '../components/footer.php' ?>