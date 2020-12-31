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
    <h1 id="titulo_cadastrar" class="titulo_usuarios">Listar Usuário</h1><hr>
    <div class="campos_tabela" id="campos_tabela">
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
                ?></table>
                <a href="cp.php"><img src="images/voltar.png" alt="Voltar"></a>
        </div>
        
        <div class="cadastrado" id="cadastrado">                         

          ?>
        </div></div>
        </div>
    <div id="rodape"><div id="rodape2"> <h3 id="copy">Desenvolvido por <a id="link_rodape2" href="mailto:clayton@prebelli.online">Clayton Prebelli</a> &copy</h3></div>
   
    
    
    
</body>
</html>