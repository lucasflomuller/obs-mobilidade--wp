
<div class="news-card news-card--1">
  <a href="<?php the_permalink(); ?>" class="u-no-decoration">
    <h4 class="heading-quartiary u-text-orange">
      <?php the_title(); ?>
    </h4>
  </a>
  <p class="lead-text--secondary">
    <?php echo get_the_excerpt(); ?>
  </p>
  <p class="news-card__footer lead-text--secondary u-text-orange">
    <span>
      <small>
        <i class="fas fa-clock"></i> <?php echo get_the_date(); ?>
      </small>
    </span>
  </p>
</div>