<?php get_header(); ?>
<header class="sobre-header">
    <div class="row">
      <div class="col-3-of-4">

        <h1 class="heading-secondary u-margin-bottom-medium">
          Sobre o Observatório
        </h1>
        <p class="u-margin-bottom-small">
          Uma entidade aberta à participação de professores, técnicos e estudantes interessados em temas relacionados à
          mobilidade. O Observatório surgiu a partir do envolvimento de equipe da UFSC no projeto PLAMUS, desenvolvido
          em 2014/2015, cujos resultados geraram diagnósticos e diretrizes sobre a estrutura da mobilidade na Região
          Metropolitana da Grande Florianópolis (RMF).
        </p>
        <p>
          Assim, a primeira missão do Observatório é acompanhar a evolução das políticas públicas na RMF na área de
          mobilidade, à luz dos resultados do PLAMUS. Tal compromisso implica em uma missão maior: a promoção e
          atualização de estudos/pesquisas, debates e projetos sobre o tema, com visão abrangente e referenciada nas
          melhores experiências locais, nacionais e mundiais.
        </p>
      </div>
    </div>
  </header>

  <?php get_template_part ( 'template-parts/equipes' ) ?>

  <?php get_template_part( 'template-parts/projetos') ?>

  <section class="section-articles">

    <div class="row">
      <div class="col-2-of-3 u-margin-bottom-zero-tab-port">

        
        <h3 class="heading-tertiary u-margin-bottom-medium">
          Acesse nossos conteúdos produzidos pelo Observatório
        </h3>
        <p class="lead-text--primary u-margin-bottom-medium">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore voluptas nihil architecto, perferendis sequi debitis rerum cumque dolores nesciunt officia autem mollitia odio incidunt error ducimus, dignissimos esse non fugit?
        </p>
        <a href="#" class="btn btn--primary-outline">
          Ver Publicações
        </a>
        
      </div>

      <div class="col-1-of-3">

        <img src="<?php echo get_template_directory_uri() . '/img/imagem-preview-publicacoes.svg' ?>" class="section-articles__image">

      </div>
    </div>
    
  </section>
<?php get_footer(); ?>