
  <footer class="footer">
    <div class="row">
      <div class="col-1-of-4">
        <div class="footer__logo-box">
          <img src="<?php echo get_template_directory_uri() . '/img/brand/logo-rodape.svg' ?>" alt="Logo Observatorio" class="footer__logo">
        </div>
        <div class="footer__navigation">
          <ul class="footer__list">
            <li><a href="#">Home</a></li>
            <li><a href="sobre.html">Sobre</a></li>
            <li><a href="publicacoes.html">Publicações</a></li>
          </ul>
        </div>
      </div>
      <div class="col-3-of-4">
        <a href="https://ufsc.br/" target="_blank" class="footer__partners">
          <img class="footer__partners--image" src="<?php echo get_template_directory_uri() . '/img/brand/logo-ufsc.svg' ?>" alt="Ufsc logo">
        </a>
        <div class="footer__contact">
          <ul>
            <li>
              <a href="http://www.instagram.com">
                <i class="fab fa-instagram"></i>
              </a>
              &nbsp;
              <a href="https://www.facebook.com/observatoriodamobilidade/">
                <i class="fab fa-facebook"></i>
              </a>
            </li>
            <li>48 3721 7865</li>
            <li>contato@observatoriomobilidade.com.br</li>
            <li>Endereço do Observatório <datalist></datalist> Mobilidade <br> Urbana UFSC, 8888</li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <?php wp_footer() ?>
</body>

</html>