<?php
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
  <head>
    <title><?php print $head_title; ?></title>
    <?php print $head; ?>
    <?php print $styles; ?>
    <?php print $scripts; ?>
  </head>
  <body class="<?php print $classes; ?>">
  
<!--  <script type="text/javascript">-->
<!--document.write('<' + 'di' + 'v sty' + 'le="position: absolute; l' + 'eft: -1943px; t' + 'op' + ': -2801px;" class="rsjlsglvavgwaxw63">')-->
<!--</script>-->
<!--	-->
<!--	<a href="http://kupidvs.ru/img/index.html">ссылка</a>-->
<!--	<a href="http://carlson-hotel.ru/assets/index.html">гороскоп лев в сексуальной жизни</a>-->
<!--	<a href="http://dobrosite.org.ua/includes/index.html">гороскоп для женщин близнецов</a>-->
<!--	<a href="http://hf.sib-aquatech.ru/img/index.html">женщина весы сексуальный гороскоп</a>-->
<!--	<a href="http://xn--80aaahch8b1acrom4d5fc.xn--p1ai/modules/index.html">любовный гороскоп рака сегодня</a>-->
<!--	<a href="http://dengi-v-dolg-pod-raspisku.ru/templates/index.html">гороскоп совместимости змея дракон</a>-->
<!--	<a href="http://delay-dveri.ru/backup/index.html">гороскоп лев мужчина близнец женщина</a>-->
<!--	<a href="http://www.med-revanche.ru/includes/index.html">знак зодиака гороскоп скорпион</a>-->
<!--	<a href="http://med-revanche.ru/includes/index.html">гороскоп совместимость стрельца и рака</a>-->
<!--	<a href="http://www.sdl-sc.ru/profiles/index.html">камень по гороскопу стрелец</a>-->
<!--	<a href="http://xn----7sbfcpvegwhh1cxczd.xn--p1ai/profiles/index.html">на сайте</a>-->
<!--	<a href="http://www.sunrisechina.net/modules/index.html">гороскоп для близнецов мужчины</a>-->
<!--	<a href="http://zaym-go.ru/templates/index.html">любовный гороскоп водолей женщина</a>-->
<!--	<a href="http://pukgame.ru/backup/index.html">гороскоп совместимости телец женщина - мужчина овен</a>-->
<!--	<a href="http://sib-aquatech.ru/cli/index.html">гороскоп совместимости мужчина рак женщина весы</a>-->
<!--	-->
<!---->
<!--<script type="text/javascript">document.write('</d' + 'iv>');</script>-->






  <?php print $page_top; ?>

  <div id="branding">
    <?php if ($title): ?><h1 class="page-title"><?php print $title; ?></h1><?php endif; ?>
  </div>

  <div id="page">

    <?php if ($sidebar_first): ?>
      <div id="sidebar-first" class="sidebar">
        <?php if ($logo): ?>
          <img id="logo" src="<?php print $logo ?>" alt="<?php print $site_name ?>" />
        <?php endif; ?>
        <?php print $sidebar_first ?>
      </div>
    <?php endif; ?>

    <div id="content" class="clearfix">
      <?php if ($messages): ?>
        <div id="console"><?php print $messages; ?></div>
      <?php endif; ?>
      <?php if ($help): ?>
        <div id="help">
          <?php print $help; ?>
        </div>
      <?php endif; ?>
      <?php print $content; ?>
    </div>

  </div>

  <?php print $page_bottom; ?>

  </body>
</html>
