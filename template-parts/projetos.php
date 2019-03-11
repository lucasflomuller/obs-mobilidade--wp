<section class="section-projects">
    <div class="row">
      <h3 class="heading-tertiary u-text-white u-margin-bottom-small">
        Nossos projetos
      </h3>
      <div class="project-card__container">
        <?php

        $projects = new WP_Query ('post_type=projeto&posts_per_page=0');

        if ($projects->have_posts()):
            while($projects->have_posts()): $projects->the_post();
            ?>
                <?php get_template_part( 'template-parts/content', 'projetos' ); ?>
            <?php
            endwhile;
            wp_reset_postdata();
          endif;

        ?>

      </div>

    </div>

  </section>  