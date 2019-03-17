<?php get_header(); ?>

<div class="search-page">
  <div class="row">
    <div class="news-card__colored">

    <?php 
    
    if (have_posts()):
      while( have_posts(  )): the_post();

        get_template_part( 'template-parts/content', 'publicacoes' );

      endwhile;

    else:

      ?>

      <div class="row u-center-text">
        <h2 class="heading-secondary u-text-white">
          Nenhum resultado encontrado...
        </h2>
        <p class="lead-text--primary u-text-white">
          Por favor, tente pesquisar por outra coisa.
        </p>
      </div>
      
      <?php
    endif;

    ?>

    </div>
  </div>
</div>

<?php get_footer(); ?>