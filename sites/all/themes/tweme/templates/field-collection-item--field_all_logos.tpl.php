<?php

/**
 * @file
 * Default theme implementation for field collection items.
 *
 * Available variables:
 * - $content: An array of comment items. Use render($content) to print them all, or
 *   print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $title: The (sanitized) field collection item label.
 * - $url: Direct url of the current entity if specified.
 * - $page: Flag for the full page state.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. By default the following classes are available, where
 *   the parts enclosed by {} are replaced by the appropriate values:
 *   - entity-field-collection-item
 *   - field-collection-item-{field_name}
 *
 * Other variables:
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 *
 * @see template_preprocess()
 * @see template_preprocess_entity()
 * @see template_process()
 */
?>
<?php
	$length = count($content['field_logos']['#items']);
?>
<div class="row skills">
	<div class="col-sm-1 <?php /**print floor(12/($length+1));*/ ?>">
		<h3><?php if(!empty($content['field_logos_category'])) print $content['field_logos_category']['#items'][0]['value'] ?></h3>
	</div>
	<div class="col-sm-11">
	<?php foreach ($content['field_logos']['#items'] as $img_count => $img): ?>
		<div class="col-sm-2 <?php /**print floor(12/($length+1));*/?> <?php /**if($img_count == 0){ if($length%2){ print 'col-md-offset-1'; } } */?>">
			<img class="img-thumbnail" src="<?php print file_create_url($img['uri']); ?>" alt="<?php print $img['alt']; ?>" title="<?php print $img['title']; ?>" />
		</div>
	<?php endforeach; ?>
	</div>
</div>
