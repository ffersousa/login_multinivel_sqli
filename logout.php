<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Adaptado de www.w3schools.com -->
    <title>Projeto I - Site Pessoal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>




<!-- Segunda secção -->
<div class="container-fluid bg-2">


    <button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal">
        <span class="glyphicon glyphicon-search"></span> Mais sobre mim
    </button>

</div>

<!-- Janela Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Conteúdo da Janela Modal -->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">O que faço?</h4>
            </div>
            <div class="modal-body">
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
            </div>
        </div>

    </div>
</div>

<?php error_reporting(0); // Não mostra  avisos.
	session_start();
	session_destroy();
	//
	header("Location: index.php \n");
?>


</body>

</html>