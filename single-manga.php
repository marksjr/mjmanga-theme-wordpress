<?php
get_header();
?>
<div class="row">
<div class="col">

<?php the_title( '<h1>', '</h1>' );?>
<?php the_post_thumbnail(); ?>

<p>
<?php echo get_the_term_list( get_the_ID(), 'genero', '<div class="genero">', ', ', '</div>' );?>
</p>
<p><b>Status: </b><?php rwmb_the_value('status_manga'); ?></p>

<p><b>Type: </b><?php rwmb_the_value( 'tipo_manga' ); ?></p>

<p><b>Alternative Name: </b><?php rwmb_the_value('nome_alternativo'); ?></p>

<p><b>Sinopse </b></p>
<?php the_content(); ?>

<h1>Chapter List</h1>
<?php list_chapter(get_the_ID(), 1000);?>

</div>
<div class="col-sm-3">
<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div>
<?php get_footer();?>
</div>