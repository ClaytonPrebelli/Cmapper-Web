<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Language" content="pt-br">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="teste.css">
</head>
<body>
<table id="tabela">
<tr>
    <th class="head">Nome</th><th class="head">Email</th><th class="head">Permissao</th><th class="head">Usuario</th>    
</tr>
<?php
require('conectar.php');
$sql = mysql_query("select usuarios.nome,usuarios.email,permissoes.permission_descricao,usuarios.usuario from usuarios join permissoes on usuarios.permissao=permissoes.idpermission");

while($acumula=mysql_fetch_array($sql)){
    echo "<td class='corpo'>".$acumula['nome']."</td><td class='corpo'>".$acumula['email']."</td><td class='corpo'>".ucfirst($acumula['permission_descricao'])."</td><td class='corpo'>".$acumula['usuario']."</td class='corpo'></tr> ";
}
?> 
</table>
</body>
</html>
