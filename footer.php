<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mjmanga
 */

?>

<div class="espaco"></div>
<div class="espaco"></div>
	<footer style="text-align: center;" id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo ( esc_html__( 'https://m.me/mjonoficial', 'mjmanga' ) ); ?>">
				<?php
				printf( esc_html__( 'Powered by %s', 'mjmanga' ), 'MJ On' );
				?>
			</a>
		</div>
	</footer>
<?php wp_footer(); ?>
</div>
</body>
</html>