<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cmapper - Cadastro de Pacientes COVID-19</title>
    
<link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
<link rel="manifest" href="images/site.webmanifest">
<link rel="mask-icon" href="images/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert2@7.12.15/dist/sweetalert2.all.js"></script>  
<link rel="stylesheet" href="estilo.css">
</head>
<body id="fundo_site">
    <div id="header">
        <div id="logo">
            <img src="images/logo.png" alt="Logo" id="logo">
        </div>
        <div id="titulo"><h1 id="titulo">Cmapper - Cadastro de Pacientes COVID-19</h1>
    <h2 id="msg">Bom dia</h2></div>
    </div>
    <section id="corpo_login">
        <div id="campos_login">
            <h1 id="titulo_login">Fazer Login</h1>
            <img src="images/manha.png" alt="manhã" id="foto_hr"><hr>
            <fieldset >
            <form action="index.php" method="post">
                <h2>Login: <input type="text" name="login" id="login"></h2>
                <h2>Senha: <input type="password" name="senha" id="senha"></h2>
                <input type="submit" value="Entrar" name="entrar" id="entrar"><input type="reset" value="Limpar" id="limpar">
            </form>
            </fieldset>
            <h2 id="resposta">
                <?php
                    $login = $_POST['login'];
                    $entrar = $_POST['entrar'];
                    $senha = md5($_POST['senha']);
                    require 'conectar.php';
                      if (isset($entrar)) {
                    
                        $verifica = mysql_query("SELECT * FROM usuarios WHERE usuario =
                        '$login' AND senha = '$senha'") or die("erro ao selecionar");
                          if (mysql_num_rows($verifica)<=0){
                            echo"<script language='javascript' type='text/javascript'>
                            swal('Login e/ou senha incorretos');window.location
                            .href='index.php';</script>";
                            die();
                          }else{
                            setcookie("login",$login);
                            header("Location:index2.html");
                          }
                      }
    ?>
    </h2> 
    </div>
    </section>
    <footer id="rodape"><div id="rodape"> <h3 id="copy">Desenvolvido por <a id="link_rodape" href="mailto:clayton@prebelli.online">Clayton Prebelli</a> &copy</h3></div></footer>
    <script>
       /* function carregar(pagina){
            $("#conteudo").load(pagina);
        }*/
    </script>
    <script src="js/scripts.js"></script>
</body>
</html>