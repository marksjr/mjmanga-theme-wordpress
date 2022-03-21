<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mjmanga
 */
get_header();
?>

<div class="row">
<div class="col">
<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
<?php 
//mjmanga_post_thumbnail(); 
the_post_thumbnail('large');
?>
<div class="espaco"></div>
<?php the_content(); ?>

</div>

<div class="col-sm-3">
<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div>
<?php
if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
?>            
</div>