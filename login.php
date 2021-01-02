<?php
                
                $login = $_POST['login'];
                $entrar = $_POST['entrar'];
                $senha = md5($_POST['senha']);
                require 'conectar.php';
                if (isset($entrar)) {
                echo "$login e $senha";
                    $verifica = mysqli_query($connect,"select * from usuarios WHERE usuario =
                    '$login' AND senha = '$senha'") or die("erro ao selecionar");
                      if (mysqli_num_rows($verifica)<=0){
                        header("Location:indexerro.php");
                        die();
                      }else{
                        setcookie("login",$login);
                        header("Location:index2.html");
                      }
                  }
?>