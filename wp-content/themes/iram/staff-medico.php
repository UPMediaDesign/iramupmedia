<?php
/*
Template Name: Staff Médico
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
<ul class="bxslider">
  
  <? query_posts('posts_per_page=-1&paged='.$paged.'&post_type=doctor'); ?>
<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

<a href="<?php echo get_permalink(); ?>">
 <li class="doctores">
 <?php the_post_thumbnail('doctor', array('class' => 'img-responsive')); ?>  	
      <h4><?php the_title(); ?></h4>
<p><? echo truncate(get_the_excerpt(), 50, ' '); ?></p>
<a href="<?php echo get_permalink(); ?>" class="btn btn-primary btn-lg cyan">Ver Más</li></a>

 </a>
    <?php endwhile; ?> 
  
</ul>
</div><!--docs-->
<?php get_sidebar('seguros'); ?>
</div><!--container-->

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
      <script src="<?php bloginfo('template_directory'); ?>/js/jquery.bxslider.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/jquery.easing.1.3.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    
$('.bxslider').bxSlider({
  minSlides: 2,
  maxSlides: 5,
  moveSlides: 5,
  slideWidth: 200,
  infiniteLoop: false,
  slideMargin: 30

});
  });
</script>


<?php get_footer('interior'); ?>