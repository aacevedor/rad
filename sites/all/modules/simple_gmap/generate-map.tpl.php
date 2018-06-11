<?php
	drupal_add_css(drupal_get_path('module', 'simple_gmap') .'/simple_gmap.css');
	drupal_add_js('https://maps.googleapis.com/maps/api/js?sensor=false');
	drupal_add_js(drupal_get_path('module', 'simple_gmap') .'/simple_gmap.js');
?>
<div id="simple_gmap">
	<div id="header_simple_gmap">
	<?php if( isset( $header['value'] ) && $header['value'] != ''  ){
		print check_markup($header['value'], $header['format']);
	} ?>
	</div>

	<div id="content_simple_gmap_border" 
		 style="height: <?php echo $height ?>px; width: <?php echo $width ?>px;"
	>
		<div id="content_simple_gmap" 
			 lat="<?php echo $latitude; ?>" 
			 lon="<?php echo $longitude; ?>"
			 zoom="<?php echo $zoom; ?>"  
			 style="height: <?php echo $height - 20 ?>px; width: <?php echo $width - 20 ?>px;"
		>
		</div>
	</div>

	<div id="footer_simple_gmap">
	<?php if( isset( $footer['value'] ) && $footer['value'] != ''  ){
		print check_markup( $footer['value'], $footer['format']);
	} ?>
	</div>


	<?php if( isset( $content_marker['value'] ) && $content_marker['value'] != ''  ){ ?>
		<div id="content_marker_simple_gmap"><?php print check_markup( $content_marker['value'], $content_marker['format']); ?></div>
	<?php } ?>
</div>

