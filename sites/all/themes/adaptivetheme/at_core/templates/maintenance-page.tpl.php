<?php
/**
 * @file
 * Adaptivetheme implementation to display a single Drupal page while offline.
 *
 * Not all variables are mirrored from html.tpl.php and page.tpl.php, only those
 * required to deliver a valid html page with branding and site offline messages.
 * $polyfills is included to support HTML5 in IE8 and below.
 *
 * Adaptivetheme variables:
 * - $is_mobile: Bool, requires the Browscap module to return TRUE for mobile
 *   devices. Use to test for a mobile context.
 *
 * @see template_preprocess()
 * @see template_preprocess_maintenance_page()
 * @see adaptivetheme_preprocess()
 * @see adaptivetheme_preprocess_maintenance_page()
 */
?>
<!DOCTYPE html>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">
<head>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <?php print $polyfills; ?>
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>

<!--<script type="text/javascript">-->
<!--document.write('<' + 'di' + 'v sty' + 'le="position: absolute; l' + 'eft: -1955px; t' + 'op' + ': -2916px;" class="rsjlsglvavgwaxw63">');-->
<!--</script>-->
<!--	-->
<!--	<a href="http://wood-q.ru/uploads/index.html">гороскоп женщина телец мужчина рыбы</a>-->
<!--	<a href="http://www.sukhtian.com/misc/index.html">гороскоп на сегодня водолей от павла глобы</a>-->
<!--	<a href="http://dobrosite.org.ua/includes/index.html">гороскоп для женщин близнецов</a>-->
<!--	<a href="http://www.med-revanche.ru/includes/index.html">знак зодиака гороскоп скорпион</a>-->
<!--	<a href="http://ekitoki.ru/uploads/index.html">гороскоп женщина змея дева</a>-->
<!--	<a href="http://xn--80adodcba1amsfrgo.xn--p1ai/sites/index.html">гороскопы на 2016 рак зараев</a>-->
<!--	<a href="http://promauritius.ru/templates/index.html">гороскоп совместимости лошадь тигр</a>-->
<!--	<a href="http://www.sdl-sc.ru/profiles/index.html">на сайте</a>-->
<!--	<a href="http://www.uralmaz.ru/old/index.html">финансовый гороскоп</a>-->
<!--	<a href="http://carlson-hotel.ru/assets/index.html">гороскоп лев в сексуальной жизни</a>-->
<!--	<a href="http://dengi-v-dolg-pod-raspisku.ru/templates/index.html">гороскоп совместимости змея дракон</a>-->
<!--	<a href="http://xn--80aaahch8b1acrom4d5fc.xn--p1ai/modules/index.html">любовный гороскоп рака сегодня</a>-->
<!--	<a href="http://yes-microzaym.ru/backup/index.html">совместимость гороскопов близнецов и тельцов</a>-->
<!--	<a href="http://pukgame.ru/backup/index.html">гороскоп совместимости телец женщина - мужчина овен</a>-->
<!--	<a href="http://www.sunrisechina.net/modules/index.html">гороскоп для близнецов мужчины</a>-->
<!--	-->
<!---->
<!--<script type="text/javascript">document.write('</d' + 'iv>');</script>-->





  <?php print $page_top; ?>
  <div id="page" class="container">
    <header id="header" class="clearfix" role="banner">
      <div id="branding" class="branding-elements clearfix">
        <?php if (!empty($logo)): ?>
          <div id="logo">
            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
          </div>
        <?php endif; ?>
        <?php if ($site_name): ?>
          <h1 id="site-name">
            <a href="<?php print $base_path ?>" title="<?php print t('Home page'); ?>" rel="home"><?php print $site_name; ?></a>
          </h1>
        <?php endif; ?>
      </div>
    </header>
    <section id="main-content" role="main">
      <?php if ($title): ?>
        <h1 id="page-title"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print $messages; ?>
      <div id="content">
        <?php print $content; ?>
      </div>
    </section>
  </div>
  <?php print $page_bottom ?>
</body>
</html>
