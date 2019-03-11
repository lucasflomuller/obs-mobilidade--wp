<?php get_header(); ?>

<?php if (have_posts()):
				while( have_posts()): the_post();
			?>

<header class="downloads-header">
    <div class="row">

      <div class="col-2-of-3">
        <h3 class="heading-quinary u-font-size-medium u-text-primary-light u-margin-bottom-small">
          <?php the_title(); ?>
        </h3>
        <p>
          <?php the_excerpt(); ?>
        </p>
      </div>

      <div class="col-1-of-3">
        <p class="lead-text--secondary u-right-text">
          <b>INÍCIO: </b> <?php the_field('data_de_inicio') ?> <br>
          <b>STATUS: </b> <?php the_field('status') ?> <br>
        </p>
      </div>

    </div>
  </header>

  
  <main class="main-downloads">
    <div class="row">

      <div class="downloads">

        <header class="downloads__header u-margin-bottom-medium">
          <h3 class="heading-quinary u-font-size-medium u-text-primary-light downloads__title">
            APRESENTAÇÕES
          </h3>
          <span class="u-text-primary-light"><small><b>
            VEJA TAMBÉM:
          </b></small></span>
          <a href="#" class="btn btn--primary-light-outline">
            Relatórios
          </a>
          <a href="#" class="btn btn--primary-light-outline">
            Microdados
          </a>
        </header>

        <section class="downloads__content">

          <ul class="downloads__list">
          <?php //the_field('conteudo'); ?>
          <!-- <li class="downloads__item">
              <span class="icon downloads__icon"></span>
              Apresentações de xx/xx/2017 a xx/xx/2018
              <ul class="downloads__list downloads__list--nested">
                <li class="downloads__item downloads__item--nested">
                  <span class="icon downloads__icon--nested"></span>
                  Download 01 - Lorem ipsum dolor sit amet
                </li>
                <li class="downloads__item downloads__item--nested">
                  <span class="icon downloads__icon--nested"></span>
                  Download 02 - Lorem ipsum dolor sit amet
                </li>
                <li class="downloads__item downloads__item--nested">
                  <span class="icon downloads__icon--nested"></span>
                  Download 03 - Lorem ipsum dolor sit amet
                </li>
                <li class="downloads__item downloads__item--nested">
                  <span class="icon downloads__icon--nested"></span>
                  Download 04 - Lorem ipsum dolor sit amet
                </li>
                <li class="downloads__item downloads__item--nested">
                  <span class="icon downloads__icon--nested"></span>
                  Download 05 - Lorem ipsum dolor sit amet
                </li>
                <li class="downloads__item downloads__item--nested">
                  <span class="icon downloads__icon--nested"></span>
                  Download 06 - Lorem ipsum dolor sit amet
                </li>
                <li class="downloads__item downloads__item--nested">
                  <span class="icon downloads__icon--nested"></span>
                  Download 07 - Lorem ipsum dolor sit amet
                </li>
                <li class="downloads__item downloads__item--nested">
                  <span class="icon downloads__icon--nested"></span>
                  Download 08 - Lorem ipsum dolor sit amet
                </li>
              </ul>
            </li>
            <li class="downloads__item">
              <span class="icon downloads__icon"></span>
              Apresentações de xx/xx/2017 a xx/xx/2018
              <ul class="downloads__list downloads__list--nested">
                <li class="downloads__item downloads__item--nested">
                  <span class="icon downloads__icon--nested"></span>
                  Download 01 - Lorem ipsum dolor sit amet
                </li>
                <li class="downloads__item downloads__item--nested">
                  <span class="icon downloads__icon--nested"></span>
                  Download 02 - Lorem ipsum dolor sit amet
                </li>
                <li class="downloads__item downloads__item--nested">
                  <span class="icon downloads__icon--nested"></span>
                  Download 03 - Lorem ipsum dolor sit amet
                </li>
                <li class="downloads__item downloads__item--nested">
                  <span class="icon downloads__icon--nested"></span>
                  Download 04 - Lorem ipsum dolor sit amet
                </li>
                <li class="downloads__item downloads__item--nested">
                  <span class="icon downloads__icon--nested"></span>
                  Download 05 - Lorem ipsum dolor sit amet
                </li>
                <li class="downloads__item downloads__item--nested">
                  <span class="icon downloads__icon--nested"></span>
                  Download 06 - Lorem ipsum dolor sit amet
                </li>
                <li class="downloads__item downloads__item--nested">
                  <span class="icon downloads__icon--nested"></span>
                  Download 07 - Lorem ipsum dolor sit amet
                </li>
                <li class="downloads__item downloads__item--nested">
                  <span class="icon downloads__icon--nested"></span>
                  Download 08 - Lorem ipsum dolor sit amet
                </li>
              </ul>
            </li>
            <li class="downloads__item">
              <span class="icon downloads__icon"></span>
              Apresentações de xx/xx/2017 a xx/xx/2018
              <ul class="downloads__list downloads__list--nested">
                <li class="downloads__item downloads__item--nested">
                  <span class="icon downloads__icon--nested"></span>
                  Download 01 - Lorem ipsum dolor sit amet
                </li>
                <li class="downloads__item downloads__item--nested">
                  <span class="icon downloads__icon--nested"></span>
                  Download 02 - Lorem ipsum dolor sit amet
                </li>
                <li class="downloads__item downloads__item--nested">
                  <span class="icon downloads__icon--nested"></span>
                  Download 03 - Lorem ipsum dolor sit amet
                </li>
                <li class="downloads__item downloads__item--nested">
                  <span class="icon downloads__icon--nested"></span>
                  Download 04 - Lorem ipsum dolor sit amet
                </li>
                <li class="downloads__item downloads__item--nested">
                  <span class="icon downloads__icon--nested"></span>
                  Download 05 - Lorem ipsum dolor sit amet
                </li>
                <li class="downloads__item downloads__item--nested">
                  <span class="icon downloads__icon--nested"></span>
                  Download 06 - Lorem ipsum dolor sit amet
                </li>
              </ul>
            </li> -->
          </ul>
        </section>
      </div>
    </div>
  </main>

  <section class="section-relacionados">
    <div class="row">
      <img src="<?php echo get_template_directory_uri() . '/img/backgrounds/bg-8.svg' ?>" alt="Graph layout" class="section-relacionados__image"> 
      <div class="relacionados">
        <p class="relacionados__title">
          Projetos relacionados:
        </p>
        <div class="relacionados__btn-list">
          <a href="#" class="btn btn--orange-outline relacionados__btn">
            Projeto neotrans
          </a>
          <a href="#" class="btn btn--green-outline relacionados__btn">
            Publicações academicas
          </a>
          <a href="#" class="btn btn--purple-outline relacionados__btn">
            Estudos anteriores
          </a>
          <a href="#" class="btn btn--blue-sea-outline relacionados__btn">
            Manifestos
          </a>
        </div>
      </div>
    </div>
  </section>


<?php endwhile;
      endif; ?>
  

<?php get_footer(); ?>