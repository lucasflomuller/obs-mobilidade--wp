<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Observatório de Mobilidade</title>
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
            <form class="navigation__form">
              <div class="search-bar">
                <input id="search-bar" type="text" placeholder="Pesquisar no site" class="search-bar__input">
                <label for="search-bar" class="search-bar__label">Pesquisar no Site:</label>
                <button class="search-bar__button">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </form>
          </ul>
        </div>
    </div>
  </nav>
