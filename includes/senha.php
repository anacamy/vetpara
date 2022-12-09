<?php
session_start();
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="../assets/css/cssAdmin.css">

<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="../assets/images/logoL.png" id="icon" alt="logo" />
    </div>

    <!-- Login Form -->
    <form action="../classes/Senha.php" method="POST">
        <h2>Troca de senha<h2>
      <input type="text" id="email" class="fadeIn second" name="email" placeholder="Digite seu email">
      <input type="text" id="senha" class="fadeIn third" name="senha" placeholder="Digite nova senha">
      <input type="text" id="senha2" class="fadeIn third" name="senha2" placeholder="Digite novamente">
      <input type="submit" class="fadeIn fourth" value="Login"></br>
    </form>
    <?php if(isset($_SESSION['erro'])){
                echo $_SESSION['erro'];
                session_destroy();
            }elseif(isset($_SESSION['sucesso'])){
                echo $_SESSION['sucesso'];
                session_destroy();
            }?>
  </div>

</div>