<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mjmanga
 */
?>



<?php
if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside>

<?php
if ( ! is_active_sidebar( 'ads1' ) ) {
	return;
}
?>
<aside id="ads2" class="widget-ads1">
	<?php dynamic_sidebar( 'ads1' ); ?>
</aside>

<?php
if ( ! is_active_sidebar( 'ads2' ) ) {
	return;
}
?>
<aside id="ads2" class="widget-ads2">
	<?php dynamic_sidebar( 'ads2' ); ?>
</aside>