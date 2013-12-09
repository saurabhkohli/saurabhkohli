<?php
/**
 * @file
 * Output for main HTML page content.
 */

$top_navigation   = render($page['top-navigation']);
$header           = render($page['header']);
$main_navigation  = render($page['main-navigation']);
$highlighted      = render($page['highlighted']);
$content          = render($page['content']);
$sidebar          = render($page['sidebar']);
$leftbar          = render($page['leftbar']);
$footer           = render($page['footer']);
$copyright        = render($page['copyright']);
$primary_tabs     = render($tabs['#primary']);
$secondary_tabs   = render($tabs['#secondary']);
$action_links     = render($action_links);
?>
<?php print $messages; ?>
<div class="page-wrapper">
	<div class="body-wrapper">
		<div class="header clearfix">
			<div class="site-logo">
  			<?php if ($logo): ?>
  				<a class="logo" title="<?php print t('Home'); ?>" rel="home" href="<?php print $front_page; ?>">
					<img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
				</a>
  			<?php endif; ?>
			</div>
			<div class="top-navigation">
			  <div role="navigation" class="navbar navbar-default">
				<div class="container">
				  <div class="navbar-header">
					<button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
					  <span class="sr-only">Toggle navigation</span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					</button>
					<a href="#" class="navbar-brand">Project name</a>
				  </div>
				  <div class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
					  <li class="active"><a href="#">Home</a></li>
					  <li><a href="#about">About</a></li>
					  <li><a href="#contact">Contact</a></li>
					</ul>
				  </div><!--/.nav-collapse -->
				</div>
			  </div>
			</div>
			<?php print $header; ?>
		</div>
		<div class="content-wrapper">
			<div class="region-content">
				<?php print $breadcrumb; ?>
				<?php if ($primary_tabs): ?>
					<h2 class="element-invisible">Primary tabs</h2>
					<ul class="tabs tabs-primary">
						<?php print $primary_tabs; ?>
					</ul>
				<?php endif; ?>
				<?php if ($secondary_tabs): ?>
					<h2 class="element-invisible">Secondary tabs</h2>
					<ul class="tabs tabs-secondary">
						<?php print $secondary_tabs; ?>
					</ul>
				<?php endif; ?>
				<?php if ($leftbar): ?>
					<div class="region-leftbar">
						<?php print $leftbar; ?>
					</div>
				<?php endif; ?>
				
				<?php print $content; ?>
			</div>
			<div class="region-sidebar">
				<?php print $sidebar; ?>
			</div>
		</div>
		<?php if ($action_links): ?>
			<h2 class="element-invisible">Actions</h2>
			<ul class="tabs action-links">
				<?php print $action_links; ?>
			</ul>
		<?php endif; ?>
		<div class="region-footer">
			<?php print $footer; ?>
		</div>
	</div>
</div>