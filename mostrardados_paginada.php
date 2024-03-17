<?php
include("../menus/menu_admin_users.php");
include("./utilsData.php");
include('../database/mysqli.php');

// $_GET['NEXT_PAGE'] 
// $offset = ($_GET['NEXT_PAGE'] -1 ) * 10 
// $total_pages_sql = "SELECT COUNT(*) FROM Users";
// $numeroPaginas = $total_pages_sql /  10

?>

<!DOCTYPE html>
<html lang="pt">

<head>
	<title>Escola Website - Mostrar dados</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel='stylesheet' type='text/css' media='screen' href='./src/css/main.css'>
	
	<meta charset="UTF-8">
</head>
<header class="row">

	<div class="col-md-6 offset-md-3 text-center bg-light border border-secondary mt-5 col-sm-12">
		<!-- offset-md-3 desloca 3 colunas para a direita  -->

		<h2>Aplicação Escola</h2>
	</div>

</header>

<body>

	<main class="col-md-6 offset-md-3 text-center bg-light border border-secondary mt-5 col-sm-12">
		<section>
			<h5 class=" text-secondary"> Listagem de utilizadores</h5>
			<table id="dtBasicExample" class="table">
				<tr>
					<th>
						<h5> Utilizador <h2>
					</th>

					<th>
						<h5> Ação #1 <h2>
					</th>
					<th>
						<h5> Ação #2 <h2>
					</th>

					<?php
					// Implementar uma solução mais abstracta.
					$query = "SELECT * from users order by username LIMIT 10";
					// Adicionar o OFFSET  na query.
					// OFFSET
					$sql = mysqli_query($conn, $query);
					$users = mysqli_fetch_all($sql, MYSQLI_ASSOC);

					foreach ($users  as $user) {
					?>
				<tr>
					<td> <?= $user['username'] ?></td>
					<!--<td> <?= $user['passw']  ?></td> -->
					<td> <a href='alterardados.php?id=<?= $user['id'] ?>'> alterar </a></td>
					<td> <a href='mostrardados.php?action=del&id=<? $user->id ?>'> Apagar </a></td> -->
				</tr>
			<?php
					}
			?>
			</table>
		</section>
		<div>
			<?php for ($i = 0; $i < $numeroPaginas; $i++) {  //  apresenta as paginas possiveis. 
			?>
				<span onclick="nextPage(<?php echo $i;  ?>)">
					<?php echo $i;  ?>
				</span>
			<?php } ?>
		</div>
	</main>
	<footer>
		<?php include '../components/footer.php' ?>
	</footer>
	<script type='text/javascript'>
		function nextPage(numeroDePagina, limit) {
			window.location.href = "?NEXT_PAGE=" + numeroDePagina + "&LIMIT=" + limit;
		}
	</script>

</body>

</html>