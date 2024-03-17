<?php


include  'database/mysqli.php';
$emptyUsernameOrPassword = '';

//print_r($_POST);

if($_POST){ // Se existir um post, entra!
	$user = null;
	$username = $_POST['username'];  // Get do username
	//$password = $_POST['password'];  // Get da password

	//	print_r($_POST['password']);
	//echo $_POST['password'];
	
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	$password = md5($password);

	//echo $password;

	if ($username && $password){ // Validar se ambos os campos têm valor.	
		//$query = "SELECT * FROM users WHERE username='" . $username . "' AND password=" . $password ."";  // exemplo // PDO 
		$query = "SELECT * FROM users WHERE username='{$username}' AND passw='{$password}' LIMIT 1";			
		//$query = "SELECT * FROM users WHERE username='Fernando' AND passw=1234"; // exemplo 
		
		$sql = mysqli_query($conn, $query);
		$user = mysqli_fetch_all($sql, MYSQLI_ASSOC);

		if(count($user) > 0) // Se encontrou password porque está registado
		{
			session_start();

			$_SESSION['user'] = $user[0]; // Guarda tudo na $user
			$_SESSION['loggedIn'] = true; // Creates a cookie saying the user is logged in

			if ($_SESSION['user']['user_type'] == 1){
				header("Location: menus/menu_admin_principal.php \n"); // redireciona para pagina protegida.
			}else{
				header("Location: menus/menu_user.php \n"); // redireciona para pagina protegida.
			}
		}
		else
		{ 
			//echo $count;
			
			echo "Utilizador não encontrado";
			//header("Location: index.php \n"); // Não existe o utilizador, redirect  para a pagina de login.
		}
		}else{
				$emptyUsernameOrPassword = true; 
		}
	}
?>