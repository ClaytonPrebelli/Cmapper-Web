<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$permissao = $_POST['permissao'];
$desc_perm;

if($permissao==1){
        $desc_perm='ADMINISTRADOR';}else if($permissao==2){
        $desc_perm='USUÁRIO';
    }else{
        $desc_perm='NÃO INFORMADO';
    }
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
require 'conectar.php';
$sql = "insert into usuarios values(default,'$nome','$email',$permissao,'$usuario',".md5."('$senha'))";
$verifica = mysql_query("select * from usuarios where nome = '$nome' or email = '$email' or usuario = '$usuario'");
if (mysql_num_rows($verifica)<=0){
        mysql_query($sql);
        header("Location:adduser.php?cadastrado=1&nome=$nome&email=$email&permissao=$permissao.usuario=$usuario");}else{
            header('Location:adduser.php?cadastrado=2');
        }

        
?>