	<?php get_header(); ?>
	
	<div class="container">
	<div class="left_container">
	<?php
		if(have_posts()) : while(have_posts()) : the_post();
	?>
	<a href="<?php the_permalink(); ?>" id="title"><h1><?php the_title(); ?></h1></a>
	<?php the_content(); ?>
		<br/>
	

	<?php
		endwhile;
		else:
	?>
	<p>Nenhum conteúdo encontrado para esta página!</p>
	<?php
		endif;
	?>
	</div>
	<div class="right_container"><?php get_sidebar(); ?></div>
	</div>
	<div style="clear:both;"></div>
	<?php get_footer(); ?>