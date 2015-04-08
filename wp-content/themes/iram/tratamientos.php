<?php
/*
Template Name: Tratamientos
*/
?>
<?php get_header('interior'); ?>

<div class="container paginas">
<div class="jumbotron pages">
<div class="datosPrecios2"><a href="#"><strong>Solicita tu Seguro Oncológico</strong></a></div>
<h1><?php the_title(); ?></br><strong><?php echo get('segundo_titulo'); ?></strong></h1>
<p><?php echo get('descripcion_corta'); ?></p>
</div>
<div id="imagenGrande"><?php the_post_thumbnail('pageNoticias', array('class' => 'img-responsive')); ?></div>

<?php the_content(); ?>


</div>

 







<?php get_footer('interior'); ?>