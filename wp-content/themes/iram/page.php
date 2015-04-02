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



</div><!--container-->
<?php get_footer('interior'); ?>