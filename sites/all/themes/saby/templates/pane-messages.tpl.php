<?php 
$help = render($page['help']);
$primary_tabs = render($tabs['#primary']);
$secondary_tabs = render($tabs['#secondary']);
$action_links = render($action_links);
?>

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
<?php if ($action_links): ?>
<h2 class="element-invisible">Actions</h2>
  <ul class="tabs action-links">
    <?php print $action_links; ?>
  </ul>
<?php endif; ?>
<?php print $help; ?>