<?php

/**
 * @file
 * Default theme implementation to format the simplenews newsletter body.
 *
 * Copy this file in your theme directory to create a custom themed body.
 * Rename it to override it. Available templates:
 *   simplenews-newsletter-body--[tid].tpl.php
 *   simplenews-newsletter-body--[view mode].tpl.php
 *   simplenews-newsletter-body--[tid]--[view mode].tpl.php
 * See README.txt for more details.
 *
 * Available variables:
 * - $build: Array as expected by render()
 * - $build['#node']: The $node object
 * - $title: Node title
 * - $language: Language code
 * - $view_mode: Active view mode
 * - $simplenews_theme: Contains the path to the configured mail theme.
 * - $simplenews_subscriber: The subscriber for which the newsletter is built.
 *   Note that depending on the used caching strategy, the generated body might
 *   be used for multiple subscribers. If you created personalized newsletters
 *   and can't use tokens for that, make sure to disable caching or write a
 *   custom caching strategy implemention.
 *
 * @see template_preprocess_simplenews_newsletter_body()
 */
$sub_title = isset( $build['#node']->field_subtitulo["und"][0]["value"] ) ? $build['#node']->field_subtitulo["und"][0]["value"] : "";

$result = render($build);
$build = str_replace("radcolombia newsletter", "", $result, $count);
?>
<div class="boletin_rad_wrapper">
  <div class="boletin_rad">
	<h2 class='title_boletin'><?php print $sub_title ?></h2>
	<div class="title_site"><?php print $title; ?></div>
	<?php print $build; ?>
  </div>
</div>	
<div class="footer_boletin">
	<div class="colum1">
		<div class='reserved'>©2013 Asociación Colombiana Red Académica de Diseño RAD. All rights reserved.</div>
		<div class='link_web'><a href="">www.radcolombia.org</a></div>
	</div>
	<div class="colum2">
		<table align="right">
			<tr>
				<td><span class='siguenos'>Síguenos</span></td>
				<td><a href="http://www.facebook.com"><img src="http://www.radcolombia.org/images_boletin/facebook_icon.png" alt="Facebook" /></a></td>
				<td><a href="http://www.twitter.com"><img src="http://www.radcolombia.org/images_boletin/twitter-icon.png" alt="Twitter" /></a></td>
			</tr>
		</table>
	</div>
</div>



