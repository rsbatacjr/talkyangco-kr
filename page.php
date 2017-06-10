<?php 
	get_header("mobile");
?>
	<div class="row">
		<?php while (have_posts()) : the_post(); ?>
			<?php
			the_content();
			?>
	<?php endwhile; ?>
	</div>
<?php
	get_footer("mobile");