<?php	
   	//include  '/login.php';
	    
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <title>Escola Website - Login</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <meta charset="UTF-8">
</head>
<html>

<body>
    <header class="row">
        <div class="col-md-6 offset-md-3 text-center bg-light border border-light mt-5 col-sm-12">
            <!-- offset-md-3 desloca 3 colunas para a direita  -->
            <h2>Aplicação Escola</h2>
        </div>

    </header>


    <main class="row col-md-6 offset-md-3 text-center mt-5 mb-5 col-sm-12">
        <section class="row border col-md-6 offset-md-3 bg-light">
            <form action="login.php" method="post">
                <div class="form-group">
                    <input type="text" name="username" placeholder="username..." class="form-control mt-3" value="" />
                    <br>
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="password..." class="form-control" value=""
                        id="passw" />
                </div>
                <!-- Um elemento para alternar visibilidade da password -->
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" onclick="verPassword()"> Mostrar Password </> </br>
                </div>
                <div class="form-group">
                    <input type="submit" class=" form-control mt-3 btn btn-success" value="Iniciar sessao"
                        class="button" />
                </div>
            </form>
        </section>


        <?php 
			//if($emptyUsernameOrPassword) 
			//	echo '<p>Username ou password vazio</p>'
		?>

    </main>

    <section class="row col-md-6 offset-md-3 mt-5 text center">
        <a href="registo.php"> Novo utilizador </a>
    </section>
    <p>Sistema Login multinível </p>
    <footer>
        <?php include 'components/footer.php';
        
        ?>

    </footer>

    <script src="../src/js/index.js"></script>
</body>

</html>