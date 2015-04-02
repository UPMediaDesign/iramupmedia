<?php get_header('interior'); ?>
<style>
.bx-controls-direction a{
	display:none;
}
</style>
<div class="container paginas">
<div class="jumbotron pages">
<h1><?php the_title(); ?></br><strong><?php echo get('actividad'); ?></strong></h1>
<p><?php echo get('descripcion_corta_doctor'); ?></p>
<p>Contacto: <a class="mail" href="mailto:<?php echo get('mail_doctor'); ?>" target="_blank"><?php echo get('mail_doctor'); ?></a></p>
</div>
<div id="imagenGrande"><?php echo get_image('foto_grande'); ?></div>


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
<div class="row">
<div class="col-md-6">
<h2><?php echo get('bloque_texto_3_titulo'); ?></h2>
<p><?php echo get('bloque_texto_3_texto'); ?></p>
</div>

<div class="col-md-6">
<h2><?php echo get('bloque_texto_4_titulo'); ?></h2>
<p><?php echo get('bloque_texto_4_texto'); ?></p>
</div>
</div><!--row-->

<div class="row separador">
<?php /*?>
<div class="col-md-6">
<h2>Publicaciones y Conferencias</h2>
<ul class="bxslider">
 <?php 
     $value  = get_field ('publicaciones_asociadas',1) ;
       foreach ( $value  as  $my_val ) { 
	   echo '<li class="doctores"><a class="publicacion" href="'.get_the_permalink($my_val).'">'.get_the_title($my_val).'</a></li>';
     }
	 
 ?>
 </ul>
</div><!--PUBLICACIONES-->
<?php */?>

<div class="container"><div class="docs">
<h2>Más del Staff Médico</h2>
<ul class="bxslider">
  
  <? query_posts('posts_per_page=-1&orderby=rand&paged='.$paged.'&post_type=doctor'); ?>
<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

 <a href="<?php echo get_permalink(); ?>"><li class="doctores">
 <?php the_post_thumbnail('doctor', array('class' => 'img-responsive')); ?>  	
      <h4><?php the_title(); ?></h4>
<p><? echo truncate(get_the_excerpt(), 50, ' '); ?></p>
<a href="<?php echo get_permalink(); ?>" class="btn btn-primary btn-lg cyan">Ver Más</li></a>
</a>
 
    <?php endwhile; ?> 
</ul>
</div><!--STAFF-->
</div>

</div><!--row-->
<?php get_sidebar('seguros'); ?>
</div><!--container-->

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
      <script src="<?php bloginfo('template_directory'); ?>/js/jquery.bxslider.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/jquery.easing.1.3.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    
$('.bxslider').bxSlider({
  minSlides: 2,
  maxSlides: 3,
  slideWidth: 160,
  moveSlides: 5,
  slideMargin: 30
});
  });  
</script>

<?php get_footer('interior'); ?>