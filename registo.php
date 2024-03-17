<?php ob_start(); // elimina 
?>
<p>
<form action="registo.php"  method="post">

<p> Novo utilizador <p>

Username:<input type="text" name="username">
Password:<input type="password" name="password">
Nome:<input type="text" name="nome">
<input type="submit" value="Registar">
</form>
</body>
</html>

<?php

$dp = mysql_connect ("localhost", "root", "");
mysql_select_db ("sql_profi",$dp);
if (isset($_POST['username']))
{
		$sql = "insert into members (username, password, nome)
	VALUES ('$_POST[username]', '$_POST[password]', '$_POST[nome]')";
	mysql_db_query("sql_profi",$sql);
	//include("menu.php");
	//ob_start();
	//error_reporting(0); // Não mostra  avisos.
	header("Location: Menu.php \n"); // redireciona para página protegida.
	
}

?>
</p>