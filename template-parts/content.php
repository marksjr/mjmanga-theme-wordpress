<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mjmanga
 */
?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php 
mjmanga_post_thumbnail();
//the_post_thumbnail('thumbnail', array('class' => 'img-manga'));
?>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h3 class="entry-title">', '</h3>' );
		else :
			the_title( '<h6 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h6>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
		<?php endif; ?>
	</header>
</article>	
