<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Nisarg
 */
?>
<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
<div id="secondary" class="col-md-3 sidebar widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div>
<?php endif; ?>


