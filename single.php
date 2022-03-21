<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package mjmanga
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();


			get_template_part( 'template-parts/single/read', get_post_type() );

			/*the_post_navigation(
				array(

					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Prev:', 'mjmanga', true ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'mjmanga', true ) . '</span> <span class="nav-title">%title</span>',

				)
			);

            the_post_navigation(
				array(

					'prev_text' => '<button type="button" class="btn btn-primary">' . esc_html__( 'Prev', 'mjmanga', true ) . '</button>',
					'next_text' => '<button type="button" class="btn btn-primary">' . esc_html__( 'Next', 'mjmanga', true ) . '</button>',

				)
			);
*/

			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; 
		?>

	</main>

<?php get_footer();?>
