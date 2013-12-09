<?php

/**
 * @file
 * Custom theme implementation to display a single Drupal page.
 */

?>
<?php if ($page['featured']): ?>
<!-- Featured -->
<div id="featured" class="vslide">
	<?php print render($page['featured']) ?>
</div>
<?php endif ?>


<!-- Navbar -->
<div class="navbar navbar-default <?php if(isset($navbar_inverse) && ($navbar_inverse)) print 'navbar-inverse' ?> <?php if(isset($navbar_effect_check) && ($navbar_effect_check)) print $navbar_effect ?> <?php if(isset($custom_navbar_class)) print $custom_navbar_class ?>" role="navigation">
	<div class="container">
		<?php print $navbar_header ?>
		<?php print $navbar_search ?>
		<?php if ($navbar_menu): ?>
			<nav class="navbar-collapse collapse <?php if(isset($custom_mainmenu_class)) print $custom_mainmenu_class ?>">
				<?php print $navbar_menu ?>
			</nav>
		<?php endif ?>
	</div>
</div>


<?php if ($preface): ?>
<!-- Header -->
<header id="header" class="container-wrapper">
  <div class="container">
    <?php print $preface ?>
  </div>
</header>
<?php endif ?>

<!-- Main -->
<div id="main">
  <div class="container">
    <?php print $messages ?>
    <div class="row row-toggle">
      <?php if ($has_sidebar_first): ?>
      <!-- Sidebar first -->
      <aside id="sidebar-first" class="sidebar col-md-3 hidden-phone">
        <?php print render($page['sidebar_first']) ?>
        <?php print render($page['sidebar_first_affix']) ?>
      </aside>
      <?php endif ?>
      <!-- Content -->
      <section id="content" class="col-md-<?php print $content_cols ?>">
        <?php print render($page['content']) ?>
      </section>
      <?php if ($has_sidebar_second): ?>
      <!-- Sidebar second -->
      <aside id="sidebar-second" class="sidebar col-md-3 hidden-phone">
        <?php print render($page['sidebar_second']) ?>
        <?php print render($page['sidebar_second_affix']) ?>
      </aside>
      <?php endif ?>
    </div>
	</div>
</div>

<!-- Footer -->
<footer id="footer" class="container-wrapper">
	<div class="container">
    <div class="footer-links pull-right">
      <?php if ($feed_icons): ?><?php print $feed_icons ?><?php endif ?>
      <?php if ($secondary_menu): ?>
			<?php foreach ($secondary_menu as $item): ?>
			<?php print l($item['title'], $item['href']) ?>
			<?php endforeach ?>
      <a href="#"><?php print t('Back to top') ?> </a>
      <?php endif ?>
    </div>
    <?php print $copyright ?>
	</div>
</footer>
