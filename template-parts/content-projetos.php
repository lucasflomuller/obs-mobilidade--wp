<!-- PROJECT CARD INIT -->
<div class="project-card">
        <input id="<?php echo get_the_ID(); ?>"   type="checkbox" class="project-card__checkbox">
        <label for="<?php echo get_the_ID(); ?>" class="project-card__more-button u-text-orange">Saiba mais <i class="fas fa-angle-down"></i></label>

        <div class="project-card__head-left">
          <h2 class="heading-tertiary u-text-orange">
            <?php the_title(); ?>
		  </h2>
        </div>

        <div class="project-card__head-right">
          <p class="lead-text--secondary">
            <b>Início:</b> 2018 <br>
            <b>Status:</b> Em andamento <br>
            <span>
              <b>Coordernador:</b> PROF. WERNER KRAUS JUNIOR <br>
              <b>Recursos:</b> FAPESC <br>
            </span>
          </p>
        </div>



        <div class="project-card__content">
          <p class="u-margin-bottom-small">
            <?php the_field('conteudo'); ?>
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

              <?php $professoresArray = explode(",", get_field('equipe_do_projeto')['professores']);

                foreach ($professoresArray as $value) {
              ?>

                    <li class="team-card__item"><?php echo $value; ?></li>

              <?php
                }
                unset($value); // break the reference with the last element
              ?>

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

              <?php $pesquisadoresArray = explode(",", get_field('equipe_do_projeto')['pesquisadores']);

                foreach ($pesquisadoresArray as $value) {
              ?>

                    <li class="team-card__item"><?php echo $value; ?></li>

              <?php
                }
                unset($value); // break the reference with the last element
              ?>

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

              <?php $alunosArray = explode(",", get_field('equipe_do_projeto')['alunos']);

                foreach ($alunosArray as $value) {
              ?>

                    <li class="team-card__item"><?php echo $value; ?></li>

              <?php
                }
                unset($value); // break the reference with the last element
              ?>

              </ul>
            </div>
          </div>

        </div>


      </div>