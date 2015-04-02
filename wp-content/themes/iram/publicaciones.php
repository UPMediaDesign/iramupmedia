<?php
/*
Template Name: Publicaciones
*/
?>
<?php get_header('interior'); ?>
<style>
.bx-controls-direction a{
	display:none;
}
</style>
<div class="container paginas">
<div class="jumbotron pages">
<h1><?php the_title(); ?></br><strong><?php echo get('segundo_titulo'); ?></strong></h1>
<p><?php echo get('descripcion_corta'); ?></p>
</div>
<div id="imagenGrande"><?php the_post_thumbnail('pageNoticias', array('class' => 'img-responsive')); ?></div>


<div class="row">
<div class="col-md-6">
<h2><?php echo get('bloque_texto_1_titulo'); ?></h2>
<p><?php echo get('bloque_texto_1_texto'); ?></p>
</div>

<div class="col-md-6">
<h2><?php echo get('bloque_texto_2_titulo'); ?></h2>
<p><?php echo get('bloque_texto_2_texto'); ?></p>
</div>
</div>


<div class="row separador">
<div class="container"><h2>Publicaciones y Conferencias</h2></div>
  <? query_posts('posts_per_page=6&orderby=rand&paged='.$paged.'&post_type=publicacion'); ?>
<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
<div class="col-md-4">
<div class="capPublicacion"><h4><?php the_title(); ?></h4>
<h5><?php 
     $value  = get_field ('doctor_asociado',1) ;
       foreach ( $value  as  $my_val ) { 
	   echo 'Por: <a class="conference" href='.get_the_permalink($my_val).'>'.get_the_title($my_val).'</a>';
     }
	 
 ?></h5>
<p><? echo truncate(get_the_excerpt(), 250, ' '); ?></p>
<a class="btnPublicacion" href="<?php echo get('link_publicacion'); ?><?php echo get('file_publicacion'); ?>" target="_blank">Ver Publicación</a>
</div>
</div>
<?php endwhile; ?> 
</div>
   <?php if (function_exists("pagination")) {
    pagination($additional_loop->max_num_pages);
} ?>
<?php get_sidebar('seguros'); ?>
</div><!--container-->
<?php get_footer('interior'); ?>