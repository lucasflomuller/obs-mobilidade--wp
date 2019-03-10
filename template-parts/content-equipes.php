<div class="col-1-of-4">
        <div class="team-card">
          <h4 class="heading-quinary">
          <?php the_title(); ?>
          </h4>
          <p class="lead-text--secondary team-card__occupation--1">
          <?php the_field('profissao') ?>
          </p>
          <hr class="team-card__hr" class="team-card__hr">
          <p class="lead-text--secondary team-card__occupation team-card__occupation--2">
            <?php the_field('funcao') ?>
          </p>
          <a href="<?php the_field('curriculo') ?>" class="team-card__link">
            <i class="fas fa-globe"></i> Currículo Lattes
          </a>
        </div>
      </div>
