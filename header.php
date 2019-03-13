<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Observatório da Mobilidade</title>
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(  ) . "/img/logo-menu.ico" ?>" />
  <?php wp_head() ?>
</head>

<body <?php body_class() ?>>

  <nav class="navigation">
    <div class="row">

      <div class="navigation__logo">
        &nbsp;
      </div>
        <div class="navigation__collapse">
          <?php wp_nav_menu( array(
            'theme_location' => 'my_main_menu',
            'container' => '',
            'container_class' => '',
            'menu-class' => 'navigation__list',
            'items_wrap' => '<ul class="navigation__list">%3$s</ul>'
          )); ?>
          <ul class="navigation__list">
          <?php get_search_form(); ?>
          </ul>
        </div>
    </div>
  </nav>
