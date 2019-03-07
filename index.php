<?php get_header('interno'); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php if (is_active_sidebar('terzi-empresas-sidebar')) : ?>
<article class="article-geral">
<?php else : ?>
<div class="article-geral-full">
<?php endif;?>
		<section class="introducao-interna introducao-geral">
			<div class="container-geral">
				<h1><?php the_title(); ?></h1>
			</div>
			
		</section>
		
		<section class="container-geral conteudo-geral">
			<div class="grid-8">
				<?php the_content(); ?>
			</div>
		</section>
	</article>
</div>
<?php endwhile; else: ?>

	<section class="introducao-interna introducao-geral">
		<div class="container">
			<h1>Página não encontrada.</h1>
		</div>
	</section>

<?php endif; ?>
<?php get_sidebar(); ?>

   
<?php get_footer(); ?>
