<?php
/*
Template Name: Awards
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
</div><!--row-->



<div class="premios">
  
  <? query_posts('posts_per_page=-1&paged='.$paged.'&post_type=award'); ?>
<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
<div class="col-xs-6 col-sm-4">
 <a class="awards" target="_blank" href="<?php echo get('award_link'); ?>"><?php the_post_thumbnail('award', array('class' => 'img-responsive')); ?></a>
</div>
    <?php endwhile; ?> 

</div>


</div><!--container-->
<?php get_footer('interior'); ?>