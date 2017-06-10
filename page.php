<?php 
	get_header();
?>
	<div class="row">
		<?php while (have_posts()) : the_post(); ?>

			<?php
			if(has_post_thumbnail($loop->ID)){
        		$thumbnail=wp_get_attachment_image_src(get_post_thumbnail_id($loop->ID),'single-post-thumbnail')[0];
        	} else {
	        	$thumbnail='';
	        }
	        ?>
	        <div class="row">
	        	<div class="col-xs-12" style="height: 315px !important; overflow: hidden;">
	        		<div class="container">
	        			<div class="mask text-center">
		        			<div style="position: absolute;bottom: 50px;width: 100%;">
		        			<h1><?= the_title(); ?></h1>
		        			<div class="row">
			        			<div class="col-md-offset-2 col-md-8">
		        					<button style="border-radius: 10px;border: 1px solid #fff; padding: 15px; background-color: transparent;width: 200px;">ESL 421</button>
		        					<button style="border-radius: 10px;border: 1px solid #fff; padding: 15px; background-color: transparent;width: 200px;">ESL 521</button>
		        					<button style="border-radius: 10px;border: 1px solid #fff; padding: 15px; background-color: transparent;width: 200px;">ESL 611</button>
			        			</div>
		        			</div>
		        			</div>
		        		</div>
	        		</div>
	        		<img class="center-this" style="width: 100%;" src="<?=$thumbnail?>">
	        	</div>
	        </div>
	        <?php
			the_content();
			?>
	<?php endwhile; ?>
	</div>
<?php
	get_footer();