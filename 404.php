<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package mjmanga
 */

get_header();
?>
<div class="row">
	<div class="col">
	<main id="primary" class="site-main">

		<section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'There is literally nothing here.', 'mjmanga' ); ?></h1>
			</header><!-- .page-header -->

			<div class="page-content">
                <img src="<?php bloginfo( 'template_directory' );?>/assets/img/404.png">
			</div>


		</section>

	</main>

</div>

<div class="col-sm-3">
<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div>

<?php get_footer();?>
</div>
