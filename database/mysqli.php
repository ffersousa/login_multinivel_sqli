 <?php
//$servername = "localhost";
//$username = "id17763818_fernando";
//$password = 'TrR0=U24]$<~)Z7b';
//$dbname = "id17763818_escola";

$servername = "localhost";
$username = "root";
$password = '';
$dbname = "escola";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
 // echo "erro na ligação";  
  die("Connection failed: " . $conn->connect_error);
} else {
  // echo "ligação efetuada!";
}
?>