	<?php get_header(); ?>
	
	<div class="container">
	<div class="left_container">
	<?php
		if(have_posts()) : while(have_posts()) : the_post();
	?>
	<a href="<?php the_permalink(); ?>" id="title"><h1><?php the_title(); ?></h1></a>
	<div class="content"><div class="thumbnail"></div><?php the_excerpt(); ?><br/><br/><br/><br/>
		Publicado por <?php the_author(); ?> em <?php the_date("d/m/Y"); ?>  às <?php the_time("g:i a"); ?> - Na categoria <?php the_category(); ?> - <?php comments_number("Nenhum Comentário","1 Comentário","% Comentários"); ?></div>
		
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