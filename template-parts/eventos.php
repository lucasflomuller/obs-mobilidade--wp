<section class="section-events">
  <div class="row">
    <div class="events">
      <div class="events__left">
        <h2 class="heading-secondary">Próximos Eventos</h2>
        <p class="lead-text--primary">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          Deleniti velit sed repudiandae laudantium.
        </p>
        <p class="lead-text--secondary">
          Lorem ipsum, dolor sit amet consectetur adipisicing elit.
          Perferendis, recusandae. Quo, aliquam voluptatibus deleniti
          facilis nesciunt maiores tempore tenetur magni voluptatem omnis,
          amet cupiditate mollitia hic temporibus natus itaque consequatur
          necessitatibus, suscipit incidunt! Quaeratide vel earum
          doloremque optio nihil error.
        </p>
      </div>
      <div class="events__right">
        <ul class="events-list">
          <!-- <span class="events-list--arrow"><i class="fas fa-arrow-up"></i></span> -->

          <?php

            $eventos = new WP_Query( 'post_type=post&posts_per_page=4&post_type=evento' );


            if ($eventos->have_posts()):

              while($eventos->have_posts()): $eventos->the_post();
              ?>

                  <?php get_template_part( 'template-parts/content', 'eventos' ); ?>
                  
              <?php
              endwhile;

              wp_reset_postdata();
            endif;

          ?>


          <!-- <span class="events-list--arrow"><i class="fas fa-arrow-down"></i></span> -->
        </ul>
      </div>
    </div>
  </div>
</section>