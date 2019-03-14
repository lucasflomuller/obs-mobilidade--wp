<?php get_header(); ?>

<header class="home-header">
  <div class="row u-margin-bottom-zero-tab-port">
    <div class="col-2-of-3">
      <h1 class="heading-secondary u-margin-bottom-small">
        Observatório da Mobilidade Urbana UFSC
      </h1>
      <p class="u-margin-bottom-big">
      Bem-vindo(a) à página do Observatório da Mobilidade Urbana UFSC. Somos um grupo aberto, destinado à
      pesquisa e estudos sobre mobilidade urbana regional, com foco no transporte público coletivo e em formas
      sustentáveis de locomoção nas cidades.
      </p>
    </div>
  </div>
  <div class="row">
    <div class="col-1-of-3">
      <p class="lead-text--secondary">
      Encontre aqui mais informações sobre a origem do Observatório, principais atividades desenvolvidas e dados
      de contato.
      </p>
      <a href="<?php echo get_page_link(8); ?>" target="_blank" class="btn btn--primary-outline">Saiba mais sobre o observatório</a>
    </div>
    <div class="col-1-of-3">
      <p class="lead-text--secondary">
      Textos produzidos pela equipe do Observatório, consistindo de relatórios e dados de projetos, publicações
      acadêmicas e artigos de opinião.
      </p>
      <a href="<?php echo get_page_link(10); ?>" target="_blank" class="btn btn--primary-outline">Conheça nossa biblioteca</a>
    </div>
  </div>
</header>
<main class="section-main" role="main">
  <?php get_template_part( 'template-parts/eventos' ) ?>
  <?php get_template_part( 'template-parts/news' ) ?>
</main>

<section class="section-more">
  <div class="row">
    <div class="col-2-of-3 u-margin-bottom-zero-tab-port">
      <h3 class="heading-tertiary u-margin-bottom-xbig">
        Saiba mais sobre o projeto de Transporte Integrado Metropolitano
      </h3>
      <p class="lead-text--primary" style="font-size:1.4rem;">
      Desde 2014 pesquisadores da UFSC participam do processo de reestruturação do transporte coletivo
da região metropolitana da Grande Florianópolis, contribuindo com o Plano de Mobilidade Urbana
Sustentável da Grande Florianópolis (PLAMUS). Em 2016, o grupo decidiu criar o Observatório da
Mobilidade Urbana que, em parceria com Governo do Estado e prefeituras, desenvolveu a proposta
da Rede Integrada de Transporte Coletivo Metropolitano.
      </p>
      <a href="https://onibusrmf.org" class="btn btn--primary-outline">
      Conheça o novo sistema
      </a>
    </div>
    <div class="col-1-of-3">
      <img class="section-more__image" src="<?php echo get_template_directory_uri() . '/img/preview-mapas.png' ?>">
    </div>
  </div>
</section>



<?php get_footer(); ?>