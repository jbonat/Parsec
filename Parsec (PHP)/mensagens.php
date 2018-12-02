<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/style-mensagens.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script type="text/javascript" src="js/open-menu.js"></script>
    <title>Mensagens - Parsec</title>
  </head>
  <body>
    <header>
      <div class="logo">
        <a href="homepage.php"><img src="img/logo.png" height="25px"></a>
      </div>
      <div class="search-box">
        <input type="text" name="search" placeholder="Pesquisar...">
      </div>
      <div class="menu-right">
        <nav>
          <ul>
            <li><a href="homepage.php"><i class="fas fa-home"></i>Home</a></li>
            <li><a href="#"><i class="fab fa-wpexplorer"></i>Explorar</a></li>
            <li><a href="notificacoes.php"><i class="fas fa-bell"></i>Notificações</a></li>
            <li><a href="mensagens.php"><i class="fas fa-envelope"></i>Mensagens</a></li>
          </ul>
        </nav>

        <div class="dropdown">
          <img onclick="myfunction()" src="img/user-photo.png" class="img-btn" width="28px">
          <div id="submenu" class="submenu-conteudo">
            <a href="profile.php"><i class="fas fa-user"></i> Meu perfil</a>
            <a href="index.php"><i class="fas fa-sign-out-alt"></i> Sair</a>
          </div>
        </div>
      </div>
    </header>

    <section>
      <div class="messages">

        <div class="messages-header">
          <div class="messages-title">
            <div>
              <h4>Mensagens</h4>
              <a href="#entrada" id="type-active">Entrada</a>
              <a href="#spam">Spam</a>
            </div>
          </div>
          <div class="open-new-chat">
            <i class="far fa-plus-square"></i>
          </div>
        </div>

        <div class="chat-user">
          <img src="img/bill-gates.png">
          <div>
            <h4>Bill Gates</h4>
            <p>Bill: I understand.</p>
          </div>
        </div>

        <div class="chat-user">
          <img src="img/chris-evans.png">
          <div>
            <h4>Chris Evans</h4>
            <p>Você: Hey man!</p>
          </div>
        </div>

        <div class="chat-user">
          <img src="img/steve-jobs.png">
          <div>
            <h4>Steve Jobs</h4>
            <p>Steve: See you later!</p>
          </div>
        </div>

      </div>
    </section>
  </body>
</html>
