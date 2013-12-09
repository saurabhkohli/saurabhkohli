<?php

/**
 * @file
 * Template to display a view as a table.
 *
 * - $title : The title of this group of rows.  May be empty.
 * - $header: An array of header labels keyed by field id.
 * - $caption: The caption for this table. May be empty.
 * - $header_classes: An array of header classes keyed by field id.
 * - $fields: An array of CSS IDs to use for each field id.
 * - $classes: A class or classes to apply to the table, based on settings.
 * - $row_classes: An array of classes to apply to each row, indexed by row
 *   number. This matches the index in $rows.
 * - $rows: An array of row items. Each row is an array of content.
 *   $rows are keyed by row number, fields within rows are keyed by field ID.
 * - $field_classes: An array of classes to apply to each field, indexed by
 *   field id, then row number. This matches the index in $rows.
 * @ingroup views_templates
 */
?>
<?php foreach ($rows as $row_count => $row): ?>
	<div class="item <?php if($row_count == 0) { print 'active';} ?>">
		<div class="vslide" style="">
			<div class="vcarousel-caption va-text">
				<div class="container">
					<div class="row">
						<div class="md-col-12">
							<?php if(!empty($row['field_topimage'])) print $row['field_topimage']  ?>
							<?php if(!empty($row['field_heading'])) { ?><h1><?php print $row['field_heading'] ?><?php if(!empty($row['field_main_heading'])) { ?>&nbsp;<span class="font-highlight"><?php print $row['field_main_heading']; } ?></span></h1><?php } ?>
							<?php if(!empty($row['body'])) print $row['body'] ?>
						</div>
					</div>
					<?php if(!empty($row['field_all_logos'])) print $row['field_all_logos'] ?>
				</div>
			</div>
		</div>
	</div>
<?php endforeach; ?>
