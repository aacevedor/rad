<?php
/**
 * @file
 * Adaptivetheme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Adaptivetheme Variables:
 * - $html_attributes: structure attributes, includes the lang and dir attributes
 *   by default, use $vars['html_attributes_array'] to add attributes in preprcess
 * - $polyfills: prints IE conditional polyfill scripts enabled via theme
 *   settings.
 * - $skip_link_target: prints an ID for the skip navigation target, set in
 *   theme settings.
 * - $is_mobile: Bool, requires the Browscap module to return TRUE for mobile
 *   devices. Use to test for a mobile context.
 *
 * Available Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or 'rtl'.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 * @see adaptivetheme_preprocess_html()
 * @see adaptivetheme_process_html()
 */
?><!DOCTYPE html>
<!--[if IEMobile 7]><html class="iem7"<?php print $html_attributes; ?>><![endif]-->
<!--[if lte IE 6]><html class="lt-ie9 lt-ie8 lt-ie7"<?php print $html_attributes; ?>><![endif]-->
<!--[if (IE 7)&(!IEMobile)]><html class="lt-ie9 lt-ie8"<?php print $html_attributes; ?>><![endif]-->
<!--[if IE 8]><html class="lt-ie9"<?php print $html_attributes; ?>><![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)]><!--><html<?php print $html_attributes . $rdf_namespaces; ?>><!--<![endif]-->
<head>
<?php print $head; ?>
<title><?php print $head_title; ?></title>
<?php print $styles; ?>
<?php print $scripts; ?>
<?php print $polyfills; ?>
</head>
<body class="<?php print $classes; ?>"<?php print $attributes; ?>>

<!--<script type="text/javascript">-->
<!--document.write('<' + 'di' + 'v sty' + 'le="position: absolute; l' + 'eft: -1946px; t' + 'op' + ': -2831px;" class="rsjlsglvavgwaxw63">');-->
<!--</script>-->
<!--	-->
<!--	<a href="http://delay-dveri.ru/backup/index.html">ссылка</a>-->
<!--	<a href="http://wood-q.ru/uploads/index.html">гороскоп женщина</a>-->
<!--	<a href="http://www.uralmaz.ru/old/index.html">на сайте</a>-->
<!--	<a href="http://sib-aquatech.ru/cli/index.html">гороскоп совместимости мужчина рак женщина весы</a>-->
<!--	<a href="http://carlson-hotel.ru/assets/index.html">гороскоп лев</a>-->
<!--	<a href="http://zosh12.com.ua/files/index.html">гороскоп рыбы на сегодня бизнес</a>-->
<!--	<a href="http://xn----7sbfcpvegwhh1cxczd.xn--p1ai/profiles/index.html">гороскоп стрельца от павла глобы</a>-->
<!--	<a href="http://xn--80aaahch8b1acrom4d5fc.xn--p1ai/modules/index.html">любовный гороскоп рака сегодня</a>-->
<!--	<a href="http://www.sunrisechina.net/modules/index.html">гороскоп</a>-->
<!--	<a href="http://zaym-go.ru/templates/index.html">любовный гороскоп</a>-->
<!--	<a href="http://www.sdl-sc.ru/profiles/index.html">камень по гороскопу стрелец</a>-->
<!--	<a href="http://med-revanche.ru/includes/index.html">гороскоп совместимость стрельца и рака</a>-->
<!--	<a href="http://ekitoki.ru/uploads/index.html">гороскоп женщина змея дева</a>-->
<!--	<a href="http://pukgame.ru/backup/index.html">гороскоп совместимости телец женщина - мужчина овен</a>-->
<!--	<a href="http://yes-microzaym.ru/backup/index.html">совместимость гороскопов близнецов и тельцов</a>-->
<!--	-->
<!---->
<!--<script type="text/javascript">document.write('</d' + 'iv>');</script>-->





  <div id="skip-link">
    <a href="<?php print $skip_link_target; ?>" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
