<?php
	//Esta é a página utilizada para apresentar o post
	?>
		<?php get_header(); ?>
	
	<div class="container">
	<div class="left_container">
	<?php
		if(have_posts()) : while(have_posts()) : the_post();
	?>
	<div class="single_container"><a href="<?php the_permalink(); ?>" id="title"><h1><?php the_title(); ?></h1></a>
		Publicado por <?php the_author(); ?> em <?php the_time('d/m/Y'); ?> às <?php the_time('g:i a'); ?><hr/><br/><br/>
		<?php the_content(); ?><hr/><br/><br/><?php comments_template(); ?>
		</div>
		<br/>
	

	<?php
		endwhile;
		else:
	?>
	<p>Nenhum post encontrado!</p>
	<?php
		endif;
	?>
	</div>
	<div class="right_container"><?php get_sidebar(); ?></div>
	</div>
	<div style="clear:both;"></div>
	<?php get_footer(); ?>