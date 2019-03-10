<section class="section-team">
    <div class="row">
      <h3 class="heading-quinary u-font-size-medium">
        Nossa equipe
      </h3>

      <?php

        $teams = new WP_Query ('post_type=equipe&posts_per_page=0');

        if ($teams->have_posts()):
            while($teams->have_posts()): $teams->the_post();
            ?>
                <?php get_template_part( 'template-parts/content', 'equipes' ); ?>
            <?php
            endwhile;
            wp_reset_postdata();
          endif;

        ?>

    
    </div>
  </section>