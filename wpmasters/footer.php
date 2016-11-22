<div class="footer">
		<div class="centered_footer">
				<div class="left_centered_footer"><a href="<?php get_option('home'); ?>"><?php bloginfo('name'); ?></a> &reg; - Todos Direitos Reservados  &copy;</div>
				<div class="right_centered_footer">
					<ul>
						<li><a href="<?php get_option('home'); ?>">HOME </a></li>
						<?php wp_list_pages('title_li='); ?>
					</ul>
				</div>
		</div>
</div>

<?php
		wp_footer();
?>

</body>
</html>