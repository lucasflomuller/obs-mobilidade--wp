<?php get_header(); ?>

<header class="publicacoes-header">
    <div class="row">
      <div class="col-2-of-3">
        <h1 class="heading-secondary u-margin-bottom-small">
          Publicações
        </h1>
        <p>
        Encontre aqui as publicações do Observatório, divididas nas categorias a seguir. 
        </p>
      </div>
    </div>
  </header>

  <section class="section-categories">

  <?php 

    $args = array(
      'post_type' => 'publicacao',
      'posts_per_page' => '4',
     );

    $publicacoes = new WP_Query($args);

    if ($publicacoes->have_posts()):
      while($publicacoes->have_posts()): $publicacoes->the_post();
      ?>

      <?php get_template_part( 'template-parts/content', 'publicacoes' ); ?>
    
      <?php 
      endwhile;
      wp_reset_postdata();
    endif;
    ?>

  </section>

<?php get_footer(); ?>