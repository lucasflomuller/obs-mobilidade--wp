<li class="events-list__item">
  <p class="events-list__date">
    <span class="events-list__date--day"> 29/09 </span>
    <span class="events-list__date--year"> <?php the_field('data') ?> </span>
  </p>
  <div class="events-list__description lead-text--secondary">
    <p class="events-list__description--text">
      <?php the_title(); ?>
    </p>
    <a href="<?php the_field('link_do_evento') ?>" class="events-list__description--btn btn btn--primary-outline">Saiba Mais</a>
  </div>
</li>