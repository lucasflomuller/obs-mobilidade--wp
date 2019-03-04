<?php get_header(); ?>

  <main class="main-noticias">
    <div class="row">
		<?php 

			if (have_posts()):
				while( have_posts()): the_post(); 
				?>

    		  <header class="news__header">
        		<h1 class="heading-secondary u-center-text u-margin-bottom-medium">
							<?php the_title(); ?>
		        </h1>
    		  </header>

					<div class="content">
							<?php the_content(); ?>
					</div>

						<div class="news__footer">
							<p class="news__footer__title u-margin-top-medium">Saiba mais:</p>
							<div class="news__btn">
								<a href="#" class="btn btn--primary-light-outline">Confia</a>
								<a href="#" class="btn btn--primary-light-outline">Forum da bacia do itacorubi</a>
							</div>
							<p class="news__date">
								<i class="fas fa-clock"></i> <?php echo get_the_date(); ?>
							</p>
							<div class="news__arrows">
								<i class="fas fa-arrow-left"></i>
								<i class="fas fa-arrow-right"></i>
							</div>
						</div>
					</div>

		<?php
					endwhile;
				endif; ?>
				
	</main>


  <section class="noticias-more">
    <div class="row">
        <?php get_template_part( 'template-parts/news' ) ?>
    </div>
  </section>

<?php get_footer(); ?>