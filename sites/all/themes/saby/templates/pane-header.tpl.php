<?php print $messages; ?>
<?php if ($logo): ?>
  <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
    <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
  </a>
<?php endif; ?>