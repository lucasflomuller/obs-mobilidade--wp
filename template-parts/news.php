<div class="section-news">
  <div class="row">
    <div class="col-2-of-3">
      <h3 class="heading-tertiary u-text-white u-margin-bottom-small">
        Acompanhe nossas últimas notícias
      </h3>
      <p class="lead-text--primary u-text-white">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero rem
        excepturi cumque a, deserunt distinctio laborum placeat nam earum
        at, quisquam eos!
      </p>
    </div>
  </div>
  <div class="row">
    <div class="news-card__carousel">
      <i class="fas fa-angle-left" id="newsCarouselLeft"></i>
      <div class="row">
        <div class="news-card__carousel-container" id="newsCardCarouselContainer">
          <?php

            $news = new WP_Query( 'post_type=post&posts_per_page=6  &category_name=noticias' );


            if ($news->have_posts()):
              while($news->have_posts()): $news->the_post();
              ?>
                <!-- <div class="col-1-of-3"> -->

                  <?php get_template_part( 'template-parts/content', 'news' ); ?>

                <!-- </div>    -->
              <?php
              endwhile;
              wp_reset_postdata();
            endif;

          ?>
        
        <!-- <div class="col-1-of-3">
          <div class="news-card news-card--2">
            <a href="./subpages/noticias.html" class="u-no-decoration">
              <h4 class="heading-quartiary u-text-primary-light">
                Excepteur sint occaeat cupididate non proident sunt in
                culpa.
              </h4>
            </a>
            <p class="lead-text--secondary">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Quia, accusantium a doloremque consectetur consequuntur cum
              veniam libero animi explicabo et eaque.
            </p>
            <p class="news-card__footer lead-text--secondary u-text-primary-light">
              <span>
                <small>
                  <i class="fas fa-clock"></i> 09/01/2018 - 14:35
                </small>
              </span>
            </p>
          </div>
        </div>
        <div class="col-1-of-3">
          <div class="news-card news-card--3">
            <a href="./subpages/noticias.html" class="u-no-decoration">
              <h4 class="heading-quartiary u-text-purple">
                Excepteur sint occaeat cupididate non proident sunt in
                culpa.
              </h4>
            </a>
            <p class="lead-text--secondary">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Quia, accusantium a doloremque consectetur consequuntur cum
              veniam libero animi explicabo et eaque.
            </p>
            <p class="news-card__footer lead-text--secondary u-text-purple">
              <span>
                <small>
                  <i class="fas fa-clock"></i> 09/01/2018 - 14:35
                </small>
              </span>
            </p>
          </div>
        </div> -->
        </div>
      </div>

      <i class="fas fa-angle-right" id="newsCarouselRight"></i>
    </div>
  </div>
</div>