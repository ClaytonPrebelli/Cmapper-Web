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
<script src="https://unpkg.com/sweetalert2@7.12.15/dist/sweetalert2.all.js"></script>
    <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>  
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
    <h1 id="titulo_cadastrar" class="titulo_usuarios">Cadastrar Usuário</h1><hr>
    <div class="campos_cadastro" id="campos">
    <form method="post"action="impede_duplicado.php">
        <p class="labels_cadastro">Nome: <input type="text" name="nome" id="nome" class="formulario_cadastro"></p>
        <p class="labels_cadastro">Email: <input type="email" name="email" id="email" class="formulario_cadastro"></p>
        <p class="labels_cadastro">Permissão: 
            <select id="lista_banco" class="lista_banco" name="permissao">
            <option value="null" class="lista_banco">Selecione...</option>
            <?php
            require 'conectar.php';
            $query = mysql_query("select idpermission,permission_descricao from permissoes");
            while($perm = mysql_fetch_array($query)) { ?>
                <option value="<?php echo $perm['idpermission']?>" class="lista_banco"><?php echo ucfirst($perm['permission_descricao']) ?></option>
                <?php } ?>
               
            </select>
        </p>
        <p class="labels_cadastro">Usuário: <input type="text" name="usuario" id="usuario" class="formulario_cadastro"></p>
        <p class="labels_cadastro">Senha: <input type="password" name="senha" id="senha" class="formulario_cadastro"></p>
        <input  type="submit" value="" id="enviar" >
        <input type="reset" value="" id="limpar">
        <a href="cp.php"><img src="images/voltar.png" alt="Voltar"></a>
        </form>
        </div>
        <?php
        
              ?>
        <div class="cadastrado" id="cadastrado">
            
          <?php
          $nome = $_GET['nome'];
          $email = $_GET['email'];
          $permissao = $_GET['permissao'];
          $desc_perm;
          
          if($permissao==1){
                  $desc_perm='Administrador';}else if($permissao==2){
                  $desc_perm='Usuário';
              }else{
                  $desc_perm='Não Informado';
              }
          $usuario = $_GET['usuario'];
          $senha = $_GET['senha'];
          $cadastrado = $_GET['cadastrado'];
            if ($cadastrado==1){
                echo '<script>
                var mostra = document.getElementById("cadastrado")
                mostra.style.display="block"
                var desliza = document.getElementById("campos")
                desliza.style.float="left"
                desliza.style.margin="auto 0px auto 70px"
            </script>';
          echo '<h2 id="titulo_cadastrado" class="titulo_usuarios">Usuário Cadastrado com Sucesso!</h2>';
          echo '<p class="labels_cadastro">Nome: <span style="font-weight:bold;
          text-align: left;
          height: 22px;
          width: 250px;
          padding-left:10px;
          padding-right:10px;
          padding-bottom:2px;
          background-color: white;
          box-shadow: 2px 2px 5px 1px #1a1919;
          border-radius: 15px;">'.$nome.'</span></p>';
          echo '<p class="labels_cadastro">Email: <span style="font-weight:bold;
          text-align: left;
          height: 22px;
          width: 150px;
          padding-left:10px;
          padding-right:10px;
          padding-bottom:2px;
          background-color: white;
          box-shadow: 2px 2px 5px 1px #1a1919;
          border-radius: 15px;">'.$email.'</span></p>';
          echo '<p class="labels_cadastro">Permissão: <span style="font-weight:bold;
          text-align: left;
          height: 22px;
          width: 150px;
          padding-left:10px;
          padding-right:10px;
          padding-bottom:2px;
          background-color: white;
          box-shadow: 2px 2px 5px 1px #1a1919;
          border-radius: 15px;">'.$desc_perm.'</span></p>';
          echo '<p class="labels_cadastro">Usuário: <span style="font-weight:bold;
          text-align: left;
          height: 22px;
          width: 150px;
          padding-left:10px;
          padding-right:10px;
          padding-bottom:2px;
          background-color: white;
          box-shadow: 2px 2px 5px 1px #1a1919;
          border-radius: 15px;">'.$usuario.'</span></p>';}else if ($cadastrado==2){          
             echo "<script>swal('Usuário já existente!')</script>";
          }

          ?>
        </div></div>
        </div>
    <div id="rodape"><div id="rodape2"> <h3 id="copy">Desenvolvido por <a id="link_rodape2" href="mailto:clayton@prebelli.online">Clayton Prebelli</a> &copy</h3></div>
   
    
    
    
</body>
</html>