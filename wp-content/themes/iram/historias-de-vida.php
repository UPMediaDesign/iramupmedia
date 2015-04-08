<?php
/*
Template Name: Historias de Vida
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
<a href="/seguros" class="solicitaSeguro">Solicita tu Seguro Oncológico</a>
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
  <? query_posts('posts_per_page=4&orderby=rand&paged='.$paged.'&post_type=testimonio'); ?>
<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
<div class="col-md-6">
<div class="imgTestimonio"><?php the_post_thumbnail('testimonio', array('class' => 'img-responsive')); ?></div>	
<div class="capTestimonio"><h4><?php the_title(); ?></h4>
<p><?php the_content(); ?></p></div>
</div>
<?php endwhile; ?> 
</div>


</div><!--container-->
<?php get_footer('interior'); ?>