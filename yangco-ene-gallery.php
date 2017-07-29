<?php 
/*
 * Template Name: Yangco E&E Gallery
 */
	get_header("mobile");
?>
<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<?= listGalleryImage('yangco-gallery'); ?>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<?= listGalleryImage('ene-gallery'); ?>
		</div>
	</div>
</div>
<?php
	get_footer("mobile");
