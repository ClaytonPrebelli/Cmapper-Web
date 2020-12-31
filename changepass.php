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
<link rel="stylesheet" href="estilo2.css">
</head>
<body id="fundo_site2">
<script src="js/scripts2.js"></script>
    <section id="header">
    <div id="header">
        <div id="logo">
           <a href="index2.php"> <img src="images/logo.png" alt="Logo" id="logo"></a>
        </div>
        <div id="titulo"><h1 id="titulo">Cmapper - Cadastro de Pacientes COVID-19</h1>
        </div><div id="logout"><a href="index.php"><img src="images/logout.png" alt="logout"></a></div><div id="cp"><a href="valida.php"><img src="images/cp.png" alt="CP" id="cp"></a></div></section>
        <div id="conteudo_total" class="conteudo">
            <div id="conteudo" class="conteudo">
    <h1 id="titulo_cadastrar" class="titulo_usuarios">Alterar Senha</h1><hr>
    <div class="campos_cadastro" id="campos">
        <p class="labels_cadastro">Escolha o critério para pesquisar o usuário e a nova senha.</p>
    <form method="post"action="?cadastrado=true">
        <p class="labels_cadastro">Nome: <input type="text" name="nome" id="nome" class="formulario_cadastro"></p>
        <p class="labels_cadastro">Email: <input type="email" name="email" id="email" class="formulario_cadastro"></p>
        <p class="labels_cadastro">Usuário: <input type="text" name="usuario" id="usuario" class="formulario_cadastro"></p>
</br><p class="labels_cadastro">Nova Senha: <input type="password" name="np" id="np" class="formulario_cadastro"></p>
        <input  type="submit" value="" id="enviar_remove" >
        
        <input type="reset" value="" id="limpar">
        <a href="cp.php"><img src="images/voltar.png" alt="Voltar"></a>
        </form>
        </div>
        <?php
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $usuario = $_POST['usuario'];
        $senha = md5($_POST['np']);
        require 'conectar.php';
        $sql = "select usuarios.nome, usuarios.email, permissoes.permission_descricao, usuarios.usuario from usuarios join permissoes on usuarios.permissao = permissoes.idpermission where usuarios.nome='$nome' or usuarios.email='$email' or usuarios.usuario='$usuario';";
        $roda=mysql_query($sql);
             while($res=mysql_fetch_array($roda)){
                 $vnome=$res['nome'];
                 $vemail=$res['email'];
                 $vpermissao= ucfirst($res['permission_descricao']);
                 $vuser=$res['usuario'];
             }
                ?>
        <div class="cadastrado" id="cadastrado">
            
          <?php
          $cadastrado = $_GET['cadastrado'];
          $alterado=$_GET['alterado'];
          if ($cadastrado==true){
                if (mysql_num_rows($roda)<=0){
                    echo "<script>swal('Usuário não encontrado')</script>";

                    }else{  echo '<script>
                var mostra = document.getElementById("cadastrado")
                mostra.style.display="block"
                var desliza = document.getElementById("campos")
                desliza.style.float="left"
                desliza.style.margin="auto 25px auto 70px"
            </script>';
          echo '<h2 id="titulo_cadastrado" class="titulo_usuarios">Usuário</h2>';
          echo '<p class="labels_cadastro">Nome: <span style="font-weight:bold;
          text-align: left;
          height: 22px;
          width: 250px;
          padding-left:10px;
          padding-right:10px;
          padding-bottom:2px;
          background-color: white;
          box-shadow: 2px 2px 5px 1px #1a1919;
          border-radius: 15px;">'.$vnome.'</span></p>';
          echo '<p class="labels_cadastro">Email: <span style="font-weight:bold;
          text-align: left;
          height: 22px;
          width: 150px;
          padding-left:10px;
          padding-right:10px;
          padding-bottom:2px;
          background-color: white;
          box-shadow: 2px 2px 5px 1px #1a1919;
          border-radius: 15px;">'.$vemail.'</span></p>';
          echo '<p class="labels_cadastro">Permissão: <span style="font-weight:bold;
          text-align: left;
          height: 22px;
          width: 150px;
          padding-left:10px;
          padding-right:10px;
          padding-bottom:2px;
          background-color: white;
          box-shadow: 2px 2px 5px 1px #1a1919;
          border-radius: 15px;">'.$vpermissao.'</span></p>';
          echo '<p class="labels_cadastro">Usuário: <span style="font-weight:bold;
          text-align: left;
          height: 22px;
          width: 80%;
          padding-left:10px;
          padding-right:10px;
          padding-bottom:2px;
          background-color: white;
          box-shadow: 2px 2px 5px 1px #1a1919;
          border-radius: 15px;">'.$vuser.'</span></p>';
          echo '<p class="labels_cadastro">Tem certeza que deseja alterar a senha deste usuário?</p>';
          echo'<a href="alterar.php?vnome='.$vnome.'&vemail='.$vemail.'&vpermissao='.$vpermissao.'&vuser='.$vuser.'&senha='.$senha.'"><img src="images/aceitar.png" alt="Aceitar"></a>';
          echo'<a href="removeuser.php?vnome='.$vnome.'&vemail='.$vemail.'&vpermissao='.$vpermissao.'&vuser='.$vuser.'&senha='.$senha.'"><img src="images/cancelar.png" alt="Cancelar"></a>';
         }
        } if($alterado==true){
            echo '<script>swal("Senha alterada com sucesso")</script>'; 
         }
         

          ?>
        </div></div>
        </div>
    <div id="rodape"><div id="rodape2"> <h3 id="copy">Desenvolvido por <a id="link_rodape2" href="mailto:clayton@prebelli.online">Clayton Prebelli</a> &copy</h3></div>
   
    
    
    
</body>
</html>