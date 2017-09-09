<?php 
/*
 * Template Name: Top Image
 */
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
	        
	        	
	        		<div class="container">
					<br>
					<br>
	        			<div class="row">
                            <div class="col-xs-12 col-sm-offset-3 col-sm-3">
        						<button style="border-radius: 10px;border: 1px solid #000; padding: 15px; background-color: transparent;width: 90%;margin-bottom: 15px;" onclick="javascript:$(this).css({'background-color': 'rgb(0,176,240)'});window.location='http://128.199.136.69:81/yangco-esl/'">Yangco ESL</button>
						    </div>
						    <div class="col-xs-12 col-sm-3">
						        <button style="border-radius: 10px;border: 1px solid #000; padding: 15px; background-color: transparent;width: 90%;margin-bottom: 15px;" onclick="javascript:$(this).css({'background-color': 'rgb(0,176,240)'});window.location='http://128.199.136.69:81/ene-center-esl-program/'">EnE ESL</button>
						    </div>
                        </div>
                        <br>
			<br>
	        		</div>		
	        	


	        <div style="background-color:#000;background-image:url('<?=$thumbnail?>');background-size:cover;background-position:center;height: 400px; margin-bottom: 15px;position:relative;">
				<div style="color:#fff;background-color:rgba(0,0,0,.4);position:absolute;top:100px;min-height:150px;width:100%;">
					<div class="container">

						<div class="col-xs-12 text-center">
							<h1><?= the_title(); ?></h1>
							<div class="col-xs-12">
								<div style="border:1px solid #fff;padding: 20px; border-radius: 10px; color: #fff; font-size: 180%;display: inline-block;">ESL 421, 521, 611</div>
							</div>
						</div>
						<div class="clearfix">&nbsp;</div>
					</div>
				</div>
			</div>
	        <?php
			the_content();
			?>
	<?php endwhile; ?>
	</div>
<?php
	get_footer();

