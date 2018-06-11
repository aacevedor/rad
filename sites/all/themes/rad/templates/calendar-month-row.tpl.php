<?php
/**
 * @file
 * Template to display a row
 * 
 * - $inner: The rendered string of the row's contents.
 */
if( $class != 'date-box' ){
	$attrs = ($class) ? 'class="' . $class . '"': '';
	$attrs .= ($iehint > 0) ? ' iehint="' . $iehint . '"' : '';
}else{
	return;
}


?>
<?php if ($attrs != ''):?>
<tr <?php print $attrs?>>
<?php else:?>
<tr>
<?php endif;?>
  <?php print $inner ?>
</tr>
