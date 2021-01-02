<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$permissao = $_POST['permissao'];
$desc_perm;

if($permissao==1){
        $desc_perm='Administrador';}else if($permissao==2){
        $desc_perm='Usuário';
    }else{
        $desc_perm='Não Informado';
    }
$usuario = $_POST['usuario'];
$senha = md5($_POST['senha']);
require 'conectar.php';
$sql = "insert into usuarios values(default,'$nome','$email',$permissao,'$usuario','$senha')";
$verifica = mysqli_query($connect,"select * from usuarios where nome = '$nome' or email = '$email' or usuario = '$usuario'");
if (mysqli_num_rows($verifica)<=0){
        mysqli_query($connect,$sql);
        header("Location:adduser.php?cadastrado=1&nome=$nome&email=$email&permissao=$permissao&usuario=$usuario");}else{
            header('Location:adduser.php?cadastrado=2');
        }

        
?>