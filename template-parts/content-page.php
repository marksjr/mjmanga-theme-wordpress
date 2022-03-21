<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mjmanga
 */
?>

<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
<?php 
//mjmanga_post_thumbnail(); 
the_post_thumbnail('large');
?>
<div class="espaco"></div>
<?php the_content(); ?>
