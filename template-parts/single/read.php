<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mjmanga
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();

//CATEGORY
$cats = get_the_category($id);


?>
<div class="read-manga">
<?php the_title( '<h1>', '</h1>' ); ?>    
<div><a href="<?php bloginfo('url');?>/manga/<?php echo $cats[0]->slug; ?>/"><button type="button" class="btn btn-primary">All Chapters</button></a></div>
</div>
<?php
the_post_navigation(
				array(

					'prev_text' => '<button type="button" class="btn btn-primary">' . esc_html__( 'Prev', 'mjmanga') . '</button>',					
                    'next_text' => '<button type="button" class="btn btn-primary">' . esc_html__( 'Next', 'mjmanga') . '</button>',

				)
			);
?>         

<div class="read-manga">
<div class="espaco"></div>
<?php dynamic_sidebar( 'ads1' ); ?>
<?php the_content('<div>', '</div>'); ?>
<?php dynamic_sidebar( 'ads2' ); ?>
</div>
<?php
the_post_navigation(
				array(

					'prev_text' => '<button type="button" class="btn btn-primary">' . esc_html__( 'Prev', 'mjmanga') . '</button>',
					'next_text' => '<button type="button" class="btn btn-primary">' . esc_html__( 'Next', 'mjmanga') . '</button>',

				)
			);
?>
<div class="read-manga">
<div><a href="<?php bloginfo('url');?>/manga/<?php echo $category->slug;?>/"><button type="button" class="btn btn-primary">All Chapters</button></a></div>
</div>

<script>
document.addEventListener('contextmenu', event => event.preventDefault());
	
    document.onkeydown = function(e) {
            if (e.ctrlKey && 
                (e.keyCode === 67 || 
                 e.keyCode === 86 || 
                 e.keyCode === 83 || 
                 e.keyCode === 85 || 
                 e.keyCode === 80 || 
                 e.keyCode === 123 || 
                 e.keyCode === 73 || 
                 e.keyCode === 74 ||  
                 e.keyCode === 117)) {
                alert('BLOCK');
                return false;
            } else {
                return true;
            }
    };
        
    $(document).bind('keydown', function(e) {
      if(e.ctrlKey && (e.which == 83)) {
        e.preventDefault();
        alert('BLOCK');
        return false;
      }
    });
    $(document).keydown(function (event) {
        if (event.keyCode == 123) { // Prevent F12
            return false;
        } else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) { // Prevent Ctrl+Shift+I        
            return false;
        }
    });
    $(document).on("contextmenu", function (e) {        
        e.preventDefault();
    });s    
</script>