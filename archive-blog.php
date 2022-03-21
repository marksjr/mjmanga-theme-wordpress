<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mjmanga
 */

get_header();
?>
<div class="row">
<div class="col">
	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<?php
			while ( have_posts() ) :
				the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>             
                    <header class="entry-header">
                        <?php
                        if ( is_singular() ) :
                            the_title( '<h1 class="entry-title">', '</h1>' );
                        else :
                            the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                        endif;
                
                        if ( 'post' === get_post_type() ) :
                            ?>
                        <?php endif; ?>
                    </header>
                    <?php  the_post_thumbnail('large'); ?>
                </article>
                <div class="espaco"></div>
	<?php endwhile;

			the_posts_pagination();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

</div>

<div class="col-sm-3">
<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div>

<?php get_footer();?>
</div>
