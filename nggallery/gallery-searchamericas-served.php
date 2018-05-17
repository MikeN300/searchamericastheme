<?php if (!defined ('ABSPATH')) die ('No direct access allowed'); ?><?php if (!empty ($gallery)) : ?>

<div class="servedoverview" id="<?php echo $gallery->anchor ?>">
	
	<!-- Thumbnails -->
	<?php foreach ( $images as $image ) : ?>


		<?php if ( !$image->hidden ) { ?>
				<img title="<?php echo $image->alttext ?>" alt="<?php echo $image->alttext ?>" src="<?php echo $image->imageURL ?>" />

		<?php } ?>
	
 	<?php endforeach; ?>
 	
</div>

<script type="text/javascript">
$(document).ready(function() {
	$('#<?php echo $gallery->anchor ?>').bxSlider({
  	  maxSlides: 1,
  	  moveSlides: 1,
	  auto: true,
	  slideWidth: 370,
	  pager: false,
	  pause: 3000
	});
});
</script>
<?php endif; ?>