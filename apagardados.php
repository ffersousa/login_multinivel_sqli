<?php 
	include '../database/mysqli.php';

	session_start();// tenho que fazer sempre session star no inicio de cada pagina
	if ($_SESSION['user']['user_type'] == 'ADMIN'){
				include("../menus/menu_admin.php");
			}else{
				include("../menus/menu_user.php");
			}

	$id = $_GET['id'];
	if($id){ 

		$query = "SELECT * from users WHERE id = $id";
		$sql = $conn->query($query);
				while ($row = $sql->fetch_row()) {
					$user['id'] = $row[0];
					$user['username'] = $row[1];
					$user['passw'] = $row[2];
				}
	}


	if (($_POST['id']))
{
	
	$username = $_POST['username'];
	$id= $_POST['id'];
	$sql = "DELETE  FROM users WHERE id =$id";
	
	$result = mysqli_query($conn, $sql);

	if ($result) {
		echo "Utilizador ". $username . " retirado da base e dados";	
	 }
	
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
		<div>
			<h6 class="h6"> Retirar utilizador </h6>
			<form action="apagardados.php"  method="post">
							<input type="text" hidden name="id" class="input" value="<?= $user['id'] ?>" />
							Username: <input type="text" name="username" value =" <?= $user['username'] ?>">
							<input class="btn btn-danger" type="submit" value="Retirar">
			</form>
	</div>
</main>

<footer>
	<?php include '../components/footer.php' ?>
</footer>
</body>
</html>
