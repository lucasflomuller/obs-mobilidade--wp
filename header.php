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
        <ul class="navigation__list">
          <li class="navigation__item"><a href="#" class="navigation__link active">Home</a></li>
          <li class="navigation__item"><a href="sobre.html" class="navigation__link">Sobre</a></li>
          <li class="navigation__item"><a href="publicacoes.html" class="navigation__link">Publicações</a></li>
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
