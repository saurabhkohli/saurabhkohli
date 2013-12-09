<div class="page-wrapper">
	<div class="body-wrapper">
		<div class="region-header">
			<?php if ($logo): ?>
				<img src="<?php print $logo ?>" alt="<?php print $site_name_and_slogan ?>" title="<?php print $site_name_and_slogan ?>" id="logo" />
			<?php endif; ?>
			
			<?php print render($page['header']); ?>
		</div>
		<div class="region-top-ad">
			<?php print render($page['top_ad']); ?>
		</div>
		<div class="content-wrapper">
			<div class="region-content">
				<?php print render($page['content']); ?>
			</div>
			<div class="region-sidebar">
				<?php print render($page['sidebar']); ?>
			</div>
		</div>
		<div class="region-bottom-ad">
			<?php print render($page['bottom_ad']); ?>
		</div>
		<div class="region-footer">
			<?php print render($page['footer']); ?>
		</div>
	</div>
</div>