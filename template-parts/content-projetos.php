<!-- PROJECT CARD INIT -->
<div class="project-card project-card--2">
        <input id="<?php echo get_the_ID(); ?>"   type="checkbox" class="project-card__checkbox">
        <label for="<?php echo get_the_ID(); ?>" class="project-card__more-button u-text-orange">Saiba mais <i class="fas fa-angle-down"></i></label>

        <div class="project-card__head-left">
          <h2 class="heading-tertiary u-text-orange">
            <?php the_field('titulo'); ?>
		  </h2>
        </div>

        <div class="project-card__head-right">
          <p class="lead-text--secondary">
            <b>Início:</b> <?php the_field('data_de_inicio') ?> <br>
            <b>Status:</b> <?php the_field('status') ?> <br>
            <span>
              <b>Coordernador:</b> <?php the_field('coordenador') ?> <br>
              <b>Recursos:</b> <?php the_field('recursos') ?> <br>
            </span>
          </p>
        </div>



        <div class="project-card__content">
          <p class="u-margin-bottom-small">
            <?php the_field('conteudo');?>
          </p>
          

          <h3 class="heading-quinary u-font-size-medium">
            Equipe do projeto:
          </h3>

          <div class="col-1-of-3">
            <div class="team-card">
              <h5 class="team-card__title">
                Professores
              </h5>
              <hr class="team-card__hr team-card__hr--orange">
              <ul class="team-card__list">
                <li class="team-card__item">Nome Sobrenome</li>
                <li class="team-card__item">Nome Sobrenome</li>
                <li class="team-card__item">Nome Sobrenome</li>
                <li class="team-card__item">Nome Sobrenome</li>
                <li class="team-card__item">Nome Sobrenome</li>
                <li class="team-card__item">Nome Sobrenome</li>
                <li class="team-card__item">Nome Sobrenome</li>
                <li class="team-card__item">Nome Sobrenome</li>
              </ul>
            </div>
          </div>
          <div class="col-1-of-3">
            <div class="team-card">
              <h5 class="team-card__title">
                Pesquisadores
              </h5>
              <hr class="team-card__hr team-card__hr--orange">
              <ul class="team-card__list">
                <li class="team-card__item">Nome Sobrenome</li>
                <li class="team-card__item">Nome Sobrenome</li>
                <li class="team-card__item">Nome Sobrenome</li>
                <li class="team-card__item">Nome Sobrenome</li>
                <li class="team-card__item">Nome Sobrenome</li>
                <li class="team-card__item">Nome Sobrenome</li>
                <li class="team-card__item">Nome Sobrenome</li>
                <li class="team-card__item">Nome Sobrenome</li>
              </ul>
            </div>
          </div>
          <div class="col-1-of-3">
            <div class="team-card">
              <h5 class="team-card__title">
                Alunos da Graduação
              </h5>
              <hr class="team-card__hr team-card__hr--orange">
              <ul class="team-card__list">
                <li class="team-card__item">Nome Sobrenome</li>
                <li class="team-card__item">Nome Sobrenome</li>
                <li class="team-card__item">Nome Sobrenome</li>
                <li class="team-card__item">Nome Sobrenome</li>
                <li class="team-card__item">Nome Sobrenome</li>
                <li class="team-card__item">Nome Sobrenome</li>
                <li class="team-card__item">Nome Sobrenome</li>
                <li class="team-card__item">Nome Sobrenome</li>
              </ul>
            </div>
          </div>

        </div>


      </div>