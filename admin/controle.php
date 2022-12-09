<?php
    session_start();

    if(!isset($_SESSION['loggedIN'])){
        header('Location: index.php');
        exit();
    }

    $nome = $_SESSION['usuario'][0];
    $email = $_SESSION['usuario'][1];
?>
<!DOCTYPE html>
<html lang="pt-br">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fontawesome.com">

    <title>Centro Veterinário Paraíso</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/templatemo-chain-app-dev.css">
    <link rel="stylesheet" href="../assets/css/animated.css">
    <link rel="stylesheet" href="../assets/css/owl.css">
    <link rel="stylesheet" href="../assets/css/estilo.css">
    <link href="./configure.php">
    <link href="./DBConnection.class.php">
    <link href="./configure.php">
    <link href="./Email.class.php">
    
    

  </head>

<body>
    <!-- ***** Preloader Start ***** -->
<div id="js-preloader" class="js-preloader">
  <div class="preloader-inner">
    <span class="dot"></span>
    <div class="dots">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
</div>
<!-- ***** Preloader End ***** -->

<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <nav class="main-nav">
          <!-- ***** Logo Start ***** -->
          <a href="index.php" class="logo">
            <img src="../images/LOGO.png" alt="Chain App Dev" width=200 height=50>
          </a>
          <!-- ***** Logo End ***** -->
          <!-- ***** Menu Start ***** -->
          <ul class="nav">
            <li class="scroll-to-section"><a href="../index.php" class="active">Home</a></li>
            <li><div class="gradient-button"><a href="../logout.php"><i>Logout</i></a></div></li> 
          </ul>
          <a class='menu-trigger'>
            <span>Menu</span>
          </a>
          <!-- ***** Menu End ***** -->
        </nav>
      </div>
    </div>
  </div>
</header>
<!-- ***** Header Area End ***** -->

<div id="modal" class="popupContainer" style="display:none;">
  <div class="popupHeader">
    <span class="header_title">Login</span>
    <span class="modal_close"><i class="fa fa-times"></i></span>
  </div>

  <section class="popupBody">
    <!-- Social Login -->
    <div class="social_login">
      <div class="">

        <script src="https://accounts.google.com/gsi/client" async defer></script>
        <div id="g_id_onload" data-client_id="295882943021-cq6shejjubbn201h9guh65hdpn08ru20.apps.googleusercontent.com" data-login_uri="http://localhost/vetpara/login.php" data-auto_prompt="false">
        </div>
        <div class="g_id_signin" data-type="standard" data-size="large" data-theme="outline" data-text="sign_in_with" data-shape="rectangular" data-logo_alignment="left">
        </div>

      </div>

      <div class="centeredText">
        <span>Ou entre com e-mail</span>
      </div>

      <div class="action_btns">
        <div class="one_half"><a href="#" id="login_form" class="btn">Login</a></div>
        <div class="one_half last"><a href="#" id="register_form" class="btn">Cadastre-se</a></div>
      </div>
    </div>

    <!-- Username & Password Login form -->
    <div class="user_login">
      <form method="post" action="../../vetpara/classes/Login.php">
        <label>Email / Nome de usuário</label>
        <input id="email" name="email" type="text" />
        <br />

        <label>Senha</label>
        <input id="senha" name="senha" type="password" />
        <br />

        <div class="action_btns">
          <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i>Voltar</a></div>
          <div class="one_half last"><button type="submit" class="btn btn_red">Login</button></div>
        </div>
      </form>
      <a href="#" class="forgot_password">Esqueceu a senha?</a>
    </div>


    <!-- Register Form -->
    <div class="user_register">
      <form method="post" action="../../vetpara/classes/Cadastro.php">
        <label>Nome completo</label>
        <input id="nome" name="nome" type="text" />
        <br />

        <label>Telefone</label>
        <input id="fone" name="fone" type="text" placeholder="xx xxxxx-xxxx" />
        <br />


        <label>Email</label>
        <input id="email" name="email" type="email" />
        <br />

        <label>Senha</label>
        <input id="senha" name="senha" type="password" />
        <br />

        <div class="checkbox">
          <input id="send_updates" type="checkbox" />
          <label for="send_updates">Envie-me email de atualizações</label>
        </div>

        <div class="action_btns">
          <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Voltar</a></div>
          <div class="one_half last"><button type="submit" class="btn btn_red">Registrar</button></div>
        </div>
      </form>
    </div>

  </section>
</div>

    </div>
  </div>
</div>
  </br>
  </br>
  </br>
  </br>
  </br>
  </br>
      <div id="coments"> 
        <div class="postagem">
        <div class="row">
      <div class="col-lg-6 align-self-center">
        <div class="section-heading">
          <h4><em> Comentários </em></h4>
          <img src="assets/images/heading-line-dec.png" alt="">
        </div>
      </div>
    </div>
          <p>Edição dos feedbacks</p>

          <div id="comentarios"> 
              <?php
              $conn = new PDO('mysql:host=51.79.72.47;dbname=hostdeprojetos_vetparaiso', 'hostdeprojetos_grums', '');

              $query = "SELECT * FROM feedback;";
              $resultSet = $conn->query($query);
              
              $result = $resultSet->fetchAll(PDO::FETCH_ASSOC);
              
              foreach ($result as $linha) {
                $nome = $linha['nome'];
                $id = $linha['id'];
                $email= $linha['email'];
                $mensagem = $linha['mensagem'];
                echo " <form action='edit.php' method='post'>
                <div class='comentarios'>
                    <input type='text' id='id' name='id' value='$id' readonly></input>
                    <input type='text' id='nome' name='nome' value='$nome' readonly></input>
                    <input type='text' id='email' name='email' style='width:300px;' value='$email' readonly></input>
                    <p><b> Comentário: $mensagem</b></p>
                    <p><textarea name='resposta' id='resposta' cols='30' rows='5'></textarea></p>
                    <button type='submit' id='responder' name='responder'>Responder</button>
                    <button type='submit' id='editar' name='editar'>Editar</button>
                    <button type='submit' id='apagarFeed' name='apagarFeed'>Apagar feedback</button>
                    <button type='submit' id='apagarUser' name='apagarUser'>Apagar usúario</button>
                    </div>
                </form>";
              }
            ?>
          </div>
        </div>
      </div>

<footer id="newsletter">

  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2">
        <div class="section-heading">
          <h4>O melhor cuidado...<br> ...para o Melhor amigo</h4>
        </div>
      </div>
      <div class="col-lg-6 offset-lg-3">
        <form id="search" action="#" method="GET">
          <div class="row">
            <div class="col-lg-6 col-sm-6">


            </div>
            <div class="col-lg-6 col-sm-6">

            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3">
        <div class="footer-widget">
          <h4>Contato</h4>
          <p>Unidade 1: Av.Santa Helena, 708 - SP, 07241-270 , Brasil</p>
          <p>Unidade 2: Av. Papa João Paulo I, 3917-SP,07173-013 , Brasil</p>
          <p><a href="https://api.whatsapp.com/send?l=pt-BR&phone=5511991503109&text=Ol%C3%A1,%20tudo%20bem%3F%20Vim%20pelo%20Site">+55 (11)99150-3109</a></p>
          <p><a href="#">info@company.co</a></p>
        </div>
      </div>

      <div class="col-lg-3">
        <div class="footer-widget">
          <h4>Sobre</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#services">Dicas</a></li>
            <li><a href="#about">Sobre</a></li>
            <li><a href="#pricing">Unidades</a></li>
            <li><a href="#clients">Equipe</a></li>
          </ul>
        </div>
      </div>
      <!--<div class="col-lg-3">
          <div class="footer-widget">
            <h4>Useful Links</h4>
            <ul>
              <li ><a class="fa fa-instagram" href="#">Free Apps</a></li>
              <li><a href="#">App Engine</a></li>
              <li><a href="#">Programming</a></li>
              <li><a href="#">Development</a></li>
              <li><a href="#">App News</a></li>
            </ul>
            
          </div> 
        </div>-->
      <div class="col-lg-3">
        <div class="footer-widget">
          <h4>Centro Veterinário Paraíso</h4>
        </div>
      </div>
    </div>
    <div class="col-lg-12">
      <div class="copyright-text">
        <p>Copyright © 2022 Centro Veterinário Paraíso. All Rights Reserved.
          <br>Design: <a href="https://templatemo.com/" target="_blank" title="css templates">Grum's Development</a>
        </p>
      </div>
    </div>
  </div>
  </div>


</footer>


<!-- Scripts -->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../assets/js/owl-carousel.js"></script>
<script src="../assets/js/animation.js"></script>
<script src="../assets/js/imagesloaded.js"></script>
<script src="../assets/js/popup.js"></script>
<script src="../assets/js/custom.js"></script>
</body>
</html>
