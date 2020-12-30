<?php
require('conectar.php');
$vuser = $_GET['vuser'];
$vnome = $_GET['vnome'];
$vpermissao = $_GET['vpermissao'];
$vemail = $_GET['vemail'];
$remove="delete from usuarios where nome='".$vnome."' or email='".$vemail."' or usuario='".$vuser."'";
mysql_query($remove);
header('Location:removeuser.php?removido=true&vnome='.$vnome.'&vemail='.$vemail.'&vpermissao='.$vpermissao.'&vuser='.$vuser);

?>