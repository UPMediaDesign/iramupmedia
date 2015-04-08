<?php
/*
Template Name: Nuestra Filosofía
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





<div class="docs">
<h2>Directores</h2>
<ul class="bxslider">
  
  <? query_posts('posts_per_page=-1&paged='.$paged.'&post_type=director'); ?>
<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

 <li class="doctores">
 <?php the_post_thumbnail('doctor', array('class' => 'img-responsive')); ?>  	
      <h4><?php the_title(); ?></h4>
      <strong><?php echo get('cargo_director'); ?></strong>
</li>
 
    <?php endwhile; ?> 
  
</ul>
</div><!--docs-->


<div class="row separador">

  <?php query_posts( 'page_id=78' );?>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  
  <div class="col-md-4">
  <?php the_post_thumbnail('filosofia', array('class' => 'img-responsive')); ?></div>
  
  <div class="col-md-8">
   <h2><?php the_title(); ?></h2>
   <p><?php echo get('bloque_texto_1_texto'); ?></p>
   <a href="<?php the_permalink(); ?>" class="btn btn-primary btn-lg cyan">Ver Más</a>
</div>

  
  <?php endwhile; endif; ?>
  <?php wp_reset_query(); ?>
</div>









<div class="docs">
<h2>Administración</h2>
  <div class="row">
  <? query_posts('posts_per_page=-1&paged='.$paged.'&post_type=administracion'); ?>
<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
 	<div class="col-sm-6 col-lg-3">
      <h4><?php the_title(); ?></h4>
      <strong><?php echo get('cargo_administrativo'); ?></strong>
 </div>
    <?php endwhile; ?> 
  </div>
</div><!--docs-->




</div><!--container-->

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
      <script src="<?php bloginfo('template_directory'); ?>/js/jquery.bxslider.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/jquery.easing.1.3.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    
$('.bxslider').bxSlider({
  minSlides: 2,
  maxSlides: 5,
  slideWidth: 207,
  infiniteLoop: false,
  slideMargin: 30
});
  });
</script>
<?php get_footer('interior'); ?>