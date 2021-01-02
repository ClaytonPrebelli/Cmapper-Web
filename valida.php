<?php
    $login_temp = $_COOKIE['login'];
    require 'conectar.php';
    $verifica = mysqli_query($connect,"select usuario, permissoes.permission_descricao from usuarios join permissoes
    on usuarios.permissao = permissoes.idpermission
    where usuarios.usuario = '$login_temp' and permissoes.permission_descricao = 'administrador';") or die("erro ao selecionar");
    if (mysqli_num_rows($verifica)<=0){
        header("Location: erro_perm.html"); 
        die();}else{
            header("Location:cp.php");
        }
    ?>