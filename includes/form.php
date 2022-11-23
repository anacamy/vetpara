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
            <img src="images/LOGO.png" alt="Chain App Dev" width=200 height=50>
          </a>
          <!-- ***** Logo End ***** -->
          <!-- ***** Menu Start ***** -->
          <ul class="nav">
            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
            <li class="scroll-to-section"><a href="#services">Para você</a></li>
            <li class="scroll-to-section"><a href="#about">Sobre</a></li>
            <li class="scroll-to-section"><a href="#pricing">Unidades</a></li>
            <li>
              <div class="gradient-button"><a id="modal_trigger" href="#modal"><i class="fa fa-sign-in-alt"></i> Cadastre-se</a></div>
            </li>
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

<div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="row">
          <div class="col-lg-6 align-self-center">
            <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
              <div class="row">
                <div class="col-lg-12">
                  <h2><em></em></h2>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
              <img src="images/foto1.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div id="services" class="services section">

  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2">
        <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
          <div class="section-heading">
            <h4> QUER SABER ALGUMAS DICAS? </h4>
            <img src="assets/images/heading-line-dec.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <div class="service-item second-serhhhsrhhvice">
          <div class="icon">
            <img src="images/LOGO3.png" width="60" height="60">
          </div>

          <h4></h4>
          <div class="img-pro">
            <img src="images/promocao/aqui seu pet é tratado com muito amor.jpg">
            <p><strong> Amor pelos animais é o que move cada uma das pessoas da nossa equipe.<br>
                No Centro Veterinário Paraíso você pode confiar que o seu pet vai ser tratado muito bem!</strong></p>
          </div>
          <div class="text-button">

          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="service-item second-serhhhsrhhvice">
          <div class="icon">
            <img src="images/LOGO3.png" width="60" height="60">
          </div>
          <h4></h4>
          <div class="img-pro">
            <img src="images/curiosidade.JPG">
          </div>
          <p><strong>Pois é, pelo instinto animal, os cães só mostram a barriga e o pescoço quando confiam! <br>
              Isso porque essas são áreas vitais que não podem ser atacadas!
            </strong>
          <div class="text-button">

          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="service-item second-serhhhsrhhvice">
          <div class="icon">
            <img src="images/LOGO3.png" width="60" height="60">
          </div>
          <h4></h4>
          <div class="img-pro">
            <img src="images/6 dicas.JPG">
          </div>
          <p><strong>Um cachorro bem cuidado é sinônimo de um cachorro feliz!
              No Centro Veterinário Paraíso tratamos seu pet com todo o amor e carinho pra que ele se sinta em casa. </strong></p>
          <div class="text-button">

          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="service-item second-serhhhsrhhvice">
          <div class="icon">
            <img src="images/LOGO3.png" width="60" height="60">
          </div>
          <h4></h4>
          <div class="img-pro">
            <img src="images/beneficios.JPG">
          </div>
          <p><strong>- Diminui a insônia porque ajuda no relaxamento; <br>
              - Alivia ansiedade e estresse; <br>
              - Ajuda nos casos de depressão e estimula a sensação de segurança;</strong></p>
          <div class="text-button">

          </div>
        </div>
      </div>
    </div>
  </div>
  <br>
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <div class="service-item second-serhhhsrhhvice">
          <div class="icon">
            <img src="images/LOGO3.png" width="60" height="60">
          </div>
          <h4></h4>
          <div class="img-pro">
            <img src="images/Dica pata.JPG">
          </div>
          <p><strong>Pois bem, esse é um hábito que deve entrar na rotina de vocês. Manter as patinhas do seu pet
              sempre higienizadas é essencial para evitar o acúmulo de sujeiras e a transmissão de doenças que vêm da rua.
              Mas para isso utilize produtos que seja próprio para pets em humano!</strong></p>
          <div class="text-button">

          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="service-item second-serhhhsrhhvice">
          <div class="icon">
            <img src="images/LOGO3.png" width="60" height="60">
          </div>
          <h4></h4>
          <div class="img-pro">
            <img src="images/lembrete.JPG">
          </div>
          <p><strong>Você já deve ter ouvido que cães não podem nem chegar perto de chocolate né?<br>
              Pois saiba que essa recomendação é 100% verdadeira!<br>
              Nossos amigos caninos não conseguem digerir a teobromina, uma molécula presente no cacau.</strong></p>
          <div class="text-button">

          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="service-item second-serhhhsrhhvice">
          <div class="icon">
            <img src="images/LOGO3.png" width="60" height="60">
          </div>
          <h4></h4>
          <div class="img-pro">
            <img src="images/não compre.JPG">
          </div>
          <p><strong>Os bichinhos fazem bem para o coração: os pets podem ajudar o coração dos donos,<br>
              muito além apenas do amor, estudos apontam que criar um bicho em casa ajuda a reduzir a pressão sanguínea,
              o colesterol e o nível de triglicérides e consequentemente a evitar ataques cardíacos.</strong></p>
          <div class="text-button">

          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="service-item second-serhhhsrhhvice">
          <div class="icon">
            <img src="images/LOGO3.png" width="60" height="60">
          </div>
          <div class="img-pro">
            <img src="images/promocao/focinho.jpg">
          </div>
          <p><strong>O focinho seco do seu dog, na maioria das vezes, não siginifica nada preocupante.<br>
              Alguns cachorros naturalmente têm focinhos mais secos do que outros ou isso só indica que seu Pet precisa beber
              água devido à desidratação leve.
              Mas é preciso ficar atento, às vezes o focinho seco pode ser um efeito colateral de um problema mais sério.
            </strong></p>
          <div class="text-button">

          </div>
        </div>
      </div>
    </div>
  </div>

</div>

<div id="about" class="about-us section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 align-self-center">
        <div class="section-heading">
          <h4> Nossos Serviços </h4>
          <img src="assets/images/heading-line-dec.png" alt="">
          <br>
          <p><strong>Aqui você encontrará os mais variados serviços cirurgias, vacinas, consultas, estética, fármacia e mimos para o seu pet.
              Com ótimos e capacitados profissionais, que estão focados na saúde, bem-estar e segurança do seu filho.
              No Centro Veterinário Paraíso o seu bebê será tratado com muito amor e carinho.</strong></p>
          <br>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="box-item">
              <h4><a><i class="fa fa-stethoscope  fa-lg" aria-hidden="true"></i>&nbsp Clínica Geral</a></h4>

              <p>Tratamento de feridas, diagnósticos, cirurgias, prescrição de medicamentos.</p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="box-item">
              <h4><a><i class="fa fa-user-md fa-lg" aria-hidden="true"></i>&nbsp Cirurgias</a></h4>
              <p>Castração, Cesária, Masectomia, outros procedimentos...</p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="box-item">
              <h4><a><i class="fa fa-star  fa-lg" aria-hidden="true"></i>&nbsp Especialidades</a></h4>
              <p>Acupuntura, cardiologia, dermatologia, oftalmologia, oncologia, ortopedia, cirurgias, ultrassonografia, anestesista, endocrinologista</p>

            </div>
          </div>
          <div class="col-lg-6">
            <div class="box-item">
              <h4><a><i class="fa fa-heartbeat fa-lg" aria-hidden="true"></i>&nbsp Internação</a></h4>
              <p>É importante que você confie onde seu pet estará internado.
                Aqui temos a melhor equipe e procedimentos para a estádia do seu bichinho!</p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="box-item">
              <h4><a><i class="fa fa-bath fa-lg" aria-hidden="true"></i>&nbsp Banho e Tosa </a></h4>
              <p>Banhos, hidratação, tosa, desembaraçamento, escovação de dentes, limpeza de ouvido e corte de unhas.</p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="box-item">
              <h4><a><i class="fa fa-ambulance " aria-hidden="true"></i> Taxi Dog</a></h4>
              <p>Transportamos seu pet com todo cuidado e segurança para garantir o conforto
                do seu bichinho.</p>
            </div>
          </div>
          <div class="col-lg-12">

            <div class="gradient-button">

            </div>

          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="right-image">
          <img src="assets/images/about-right-dec.png" alt="">
        </div>
      </div>
    </div>
  </div>
</div>

<div id="about" class="about-us section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 align-self-center">
        <div class="section-heading">
          <h4> Nossa Equipe </h4>
          <img src="assets/images/heading-line-dec.png" alt="">


        </div>
      </div>
    </div>
  </div>
</div>
<br>

<div class="container">
  <div class="row">
    <div class="col-lg-3">
      <div class="service-item second-serhhhsrhhvice">
        <h4> Dra. Mariza</h4>
        <div class="img-pro">
          <img src="images/Mariza.jpeg">
          <p><strong><em>
              </em></strong></p>
        </div>
        <div class="text-button">

        </div>
      </div>
    </div>
    <div class="col-lg-3">
      <div class="service-item second-serhhhsrhhvice">
        <h4>Dra. Larissa</h4>
        <div class="img-pro">
          <img src="images/Larissa.jpeg">
        </div>
        <p><strong><em> </em></strong>
        <div class="text-button">

        </div>
      </div>
    </div>
    <div class="col-lg-3">
      <div class="service-item second-serhhhsrhhvice">
        <h4>Dra. Gabriela</h4>
        <div class="img-pro">
          <img src="images/Gabriela.jpeg">
        </div>
        <p><strong><em> </em></strong></p>
        <div class="text-button">
        </div>
      </div>
    </div>
  </div>
</div>
</div>


<div id="pricing" class="pricing-tables">
  <div class="container">
    <div class="row">

      <div class="col-lg-8 offset-lg-2">
        <div class="section-heading">
          <h4><em>Nossas unidades</em></h4>
          <img src="assets/images/heading-line-dec.png" alt="">

        </div>
      </div>

      <div class="col-lg-4">
        <div class="pricing-item-regular">
          <span class="price">
            <img src="images/loca.png" width="60" height="60">
          </span>
          <h4>Unidade 1</h4>
          <div class="icon">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3660.499498547144!2d-46.42828828450093!3d-23.44244048474201!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce6209358d233d%3A0xe3df12758d07f974!2sAv.%20Santa%20Helena%2C%20708%20-%20Vila%20Paraiso%2C%20Guarulhos%20-%20SP%2C%2007241-270!5e0!3m2!1spt-BR!2sbr!4v1663856084906!5m2!1spt-BR!2sbr" width="250" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <ul>
            <br>
            <li>Avenida Santa Helena, 708 - CEP: 07241-270</li>
            <li>Vila Paraíso</li>
            <li>Guarulhos-SP</li>

          </ul>
          <div class="border-button">
            <a target="blank" href="https://goo.gl/maps/1BRaPqbFjgvxfDdJ8">Veja como nos encontrar</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="pricing-item-pro">
              <h4>Comentarios: </h4>
        <?php
        require_once("/xampp/htdocs/vetpara/database/DBConnection.class.php");
        $conn = new DBConnection();
        $user = array();
          $viewList =
            "
                SELECT nome, mensagem FROM feedback;
                      ";
          $sqlResults = $conn->query($viewList);
          while ($row = $sqlResults->fetch_assoc()) {
            $user['nome'] = $row;
          }
          $total = $sqlResults->num_rows;
        ?>
          <form>
            <table class='table table-striped table-bordered table-hover'>
              <thead>
                <tr class='active'>
                  <th>Cliente</th>
                  <th>Mensagem</th>
                </tr>
              </thead>
              <tbody>
              <?php
                  if($total > 0) {
                    do {
                ?>
                  <tr>
                    <td><?=  $user["nome"]["nome"]  ?></td>
                    <td><?= $user["nome"]["mensagem"] ?></td>
                  </tr>
                  <?php
                    // finaliza o loop que vai mostrar os dados
                    }while($user == $total);
                  // fim do if
                  }
                ?>
              </tbody>
            </table>
          </form>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="pricing-item-regular">
          <span class="price"><img src="images/loca.png" width="60" height="60">
          </span>
          <h4>Unidade 2- 24hrs</h4>
          <div class="icon">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3660.967490791154!2d-46.432545484501226!3d-23.425541484750443!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce89f1f08edad7%3A0x5362e9e5142303f9!2sAv.%20Papa%20Jo%C3%A3o%20Paulo%20I%2C%203917%20-%20Jardim%20Pres.%20Dutra%2C%20Guarulhos%20-%20SP%2C%2007173-013!5e0!3m2!1spt-BR!2sbr!4v1663859675041!5m2!1spt-BR!2sbr" width="250" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <ul>
            <br>
            <li>Av. Papa João Paulo I, 3917- CEP: 07173-013</li>
            <li> Jardim Pres. Dutra</li>
            <li>Guarulhos-SP</li>

          </ul>
          <div class="border-button">
            <a target="blank" href="https://goo.gl/maps/mSBDdgh4xCNoEem26">Veja como nos encontrar</a>
          </div>
        </div>
      </div>

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
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/owl-carousel.js"></script>
<script src="assets/js/animation.js"></script>
<script src="assets/js/imagesloaded.js"></script>
<script src="assets/js/popup.js"></script>
<script src="assets/js/custom.js"></script>