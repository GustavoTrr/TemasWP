<?php get_header(); ?>
<div class="row">
	<div class="col-md-8">
		<h1>Conteúdo Geral</h1>
		<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<p><?php the_content(); ?></p>
		<hr>
		<?php endwhile; ?>
			<div class="paginacao">
				<ul>
					<li><?php next_posts_link('Posts Antigos'); ?></li>
					<li><?php previous_posts_link('Novos posts'); ?></li>
				</ul>
			</div>
		<?php else: ?>
		<?php endif; ?>
	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
	