<form class="navigation__form" role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <div class="search-bar">
    <input id="search-bar" type="search" placeholder="Pesquisar no site" class="search-bar__input" name="s">
    <label for="search-bar" class="search-bar__label">Pesquisar no Site:</label>
    <input type="hidden" name="category_name" value="noticias" />
    <button type="submit" class="search-bar__button">
      <i class="fas fa-search"></i>
    </button>
  </div>
</form>