<article class="news-card">
  <a href="<?php the_permalink(); ?>" target="_blank" class="u-no-decoration">
    <h4 class="heading-quartiary">
      <?php the_title(); ?>
    </h4>
  </a>
  <p class="lead-text--secondary">
    <?php echo get_the_excerpt(); ?>
  </p>
  <p class="news-card__footer lead-text--secondary">
    <span>
      <small>
        <i class="fas fa-clock"></i> <?php echo get_the_date(); ?>
      </small>
    </span>
  </p>
</article>