<?php get_header(); ?>
<div id="main">
	<div id="conteudo">
		<h1>Conteúdo Geral</h1>
		<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
		<h2><?php the_title(); ?></h2>
		<p><?php the_content(); ?></p>
		<hr>
		<?php endwhile; else: ?>
		<?php endif; ?>
	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
	