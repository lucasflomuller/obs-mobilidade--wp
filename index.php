<?php get_header(); ?>

<header class="home-header">
  <div class="row u-margin-bottom-zero-tab-port">
    <div class="col-2-of-3">
      <h1 class="heading-secondary u-margin-bottom-small">
        Observatório de Mobilidade Urbana UFSC
      </h1>
      <p class="u-margin-bottom-medium">
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Perspiciatis, esse doloribus! Quidem saepe numquam suscipit
        recusandae repudiandae corrupti rem itaque consequuntur obcaecati
        harum quaerat, officia assumenda a non voluptatum deleniti nobis id
        hic error sit aperiam. Saepe distinctio illum, voluptatum
        necessitatibus nostrum esse consequuntur suscipit earum quae
        corporis cumque nihil.
      </p>
    </div>
  </div>
  <div class="row">
    <div class="col-1-of-3">
      <p class="lead-text--secondary">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique
        voluptatibus quam numquam. Optio perspiciatis reiciendis natus
        fugiat consequatur numquam.
      </p>
      <a href="#" class="btn btn--primary-outline">Saiba mais sobre o observatório</a>
    </div>
    <div class="col-1-of-3">
      <p class="lead-text--secondary">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique
        voluptatibus quam numquam. Optio perspiciatis reiciendis natus
        fugiat consequatur numquam.
      </p>
      <a href="#" class="btn btn--primary-outline">Conheça nossa biblioteca</a>
    </div>
  </div>
</header>
<main class="section-main" role="main">
  <?php get_template_part( 'template-parts/eventos' ) ?>
  <?php get_template_part( 'template-parts/news' ) ?>
</main>

<section class="section-more">
  <div class="row">
    <div class="col-2-of-3 u-margin-bottom-zero-tab-port">
      <h3 class="heading-tertiary u-margin-bottom-xbig">
        Saiba mais sobre o projeto de Transporte Integrado Metropolitano
      </h3>
      <p class="lead-text--primary">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto consequatur similique mollitia excepturi
        molestias magnam dolores nemo in. Debitis, dolor!
      </p>
      <a href="#" class="btn btn--primary-outline">
        Veja os mapas do novo sistema
      </a>
    </div>
    <div class="col-1-of-3">
      <img class="section-more__image" src="<?php echo get_template_directory_uri() . '/img/preview-mapas.png' ?>">
    </div>
  </div>
</section>



<?php get_footer(); ?>