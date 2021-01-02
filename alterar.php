<?php
require('conectar.php');
$vuser = $_GET['vuser'];
$vnome = $_GET['vnome'];
$vpermissao = $_GET['vpermissao'];
$vemail = $_GET['vemail'];
$senha = $_GET['senha'];
$change=("update usuarios set senha = '$senha' WHERE usuario = '$vuser' or nome = '$vnome' or email = '$vemail';");
mysqli_query($connect,$change);
header('Location:changepass.php?alterado=true');

?>