<?php get_header(); ?>

<header class="publicacoes-header">
    <div class="row">
      <div class="col-2-of-3">
        <h1 class="heading-secondary u-margin-bottom-small">
          Publicações
        </h1>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti ab, ut quas quaerat optio voluptate rerum
          maiores quasi laboriosam consequuntur, enim porro dolorum, voluptas laudantium tempore? Esse hic soluta
          repellat! Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, expedita hic soluta.
        </p>
      </div>
    </div>
  </header>

  <section class="section-categories">
    <?php
      $news = new WP_Query( 'post_type=post&posts_per_page=3&category_name=downloads,noticias,projetos' );
      if ($news->have_posts()):
        while($news->have_posts()): $news->the_post();
      ?>
      <?php get_template_part( 'template-parts/content', 'publicacoes' ); ?>     
      <?php
        endwhile;
        wp_reset_postdata();
      endif;
    ?>
  </section>

<?php get_footer(); ?>
