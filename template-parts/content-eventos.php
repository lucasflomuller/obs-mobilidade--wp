<li class="events-list__item">
  <p class="events-list__date">
  <?php $dateArray = explode("/", get_field('data')); ?>
    <span class="events-list__date--day"> <?php echo $dateArray[0] . "/" . $dateArray[1]; ?> </span>
    <span class="events-list__date--year"> <?php echo end($dateArray); ?> </span>
  </p>
  <div class="events-list__description lead-text--secondary">
    <p class="events-list__description--text">
      <?php the_title(); ?>
    </p>
    <a href="<?php the_field('link_do_evento') ?>" class="events-list__description--btn btn btn--primary-outline">Saiba Mais</a>
  </div>
</li>