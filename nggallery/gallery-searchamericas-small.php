<?php 
/**
Template Page for the gallery overview

Follow variables are useable :

	$gallery     : Contain all about the gallery
	$images      : Contain all images, path, title
	$pagination  : Contain the pagination content

 You can check the content when you insert the tag <?php var_dump($variable) ?>
 If you would like to show the timestamp of the image ,you can use <?php echo $exif['created_timestamp'] ?>
**/
?>
<?php if (!defined ('ABSPATH')) die ('No direct access allowed'); ?><?php if (!empty ($gallery)) : ?>
<div class="gallery-container smallgallery">
		
		<div class="galleryoverview" id="<?php echo $gallery->anchor ?>">
		
		
			
			<!-- Thumbnails -->
			<?php $i=1;foreach ( $images as $image ) : ?>
			
			<div id="ngg-image-<?php echo $image->pid ?>" class="gallery-box <?php echo ($i % 2 == 0 ? 'even' : 'odd');?>" <?php echo $image->style ?> >
				<div class="testimonial">
					<?php if ( !$image->hidden ) { ?>
						<p class="test-image">
							<img title="<?php echo $image->alttext ?>" alt="<?php echo $image->alttext ?>" src="<?php echo $image->imageURL ?>" />
						</p>
						<div class="test-bubble">
							<strong class="test-title"><?php echo $image->alttext ?></strong>
							<p class="test-description"><?php echo $image->description ?></p>
							<span class="test-arrow"></span>
						</div>
						<div class="test-author"><p><?php echo nggcf_get_field($image->pid, "Author"); ?></p></div>
					<?php $i++;} ?>
				</div>
			</div>
			
		
		
		 	<?php endforeach; ?>
		 	
		</div>
</div>
<script type="text/javascript">
$(document).ready(function() {
	$('#<?php echo $gallery->anchor ?>').bxSlider({
  	  maxSlides: 1,
  	  moveSlides: 1,
	  auto: false,
	  slideWidth: 280,
	  pager: false
	});
})
</script>
<?php endif; ?>