<?php
/*
Template Name: Tipos de Cáncer
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

  <? query_posts('posts_per_page=6&paged='.$paged.'&post_type=tipo_de_cancer'); ?>
<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

<a class="hotN" href="<?php the_permalink(); ?>">
<div class="col-sm-5 col-md-6">
   
<div class="imagenNews"><?php the_post_thumbnail('noticias', array('class' => 'img-responsive')); ?></div> 	
<div class="contentN"><h4><? echo truncate(get_the_title(), 25, ' '); ?></h4>
<p><? echo truncate(get_the_excerpt(), 90, ' '); ?></p></div>

</div><!--col--></a>

<?php endwhile; ?> 
</div><!--row-->

   <?php if (function_exists("pagination")) {
    pagination($additional_loop->max_num_pages);
} ?>
<?php get_sidebar('seguros'); ?>
</div><!--container-->

<?php get_footer('interior'); ?>