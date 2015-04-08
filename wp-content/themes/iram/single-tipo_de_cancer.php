<?php get_header('interior'); ?>

<div class="container paginas">
<div class="jumbotron pages">
<h1><?php the_title(); ?><br /><strong><?php echo get('segundo_titulo_cancer'); ?></strong></h1>
<p><?php echo get('descripcion_corta_cancer'); ?></p>
<a href="/seguro-oncologico" class="solicitaSeguro">Solicita tu Seguro Oncológico</a>
</div>
<div id="imagenGrande"><?php the_post_thumbnail('pageNoticias', array('class' => 'img-responsive')); ?></div>

<div class="row">

<div class="col-md-6">
<?php the_content(); ?>
</div>

<div class="col-md-6">
<h2>Características del Cáncer</h2>

<div class="panel-group" id="accordion">



<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
<?php
$id = get_the_ID();?>
<?php
      // second way to get the fields
 
      // get_group will retunr an array of all the groups and the group's fields
      // the parameter for this function is the group's name
      $members = get_group('caracteristicas_cancer');
      // to see how the array is formed you can use pr($members);
      // the way the array is formed is
      // [group index][field name][field index]
      // The image fields in the array have one more level where the letter "original" and "thumb" which will show
      // the original or the thumbnail image
	  $hola = 0;
      foreach($members as $member){
		  $hola++;
        echo '<div class="panel panel-default"><div class="panel-heading"><h4 class="panel-title"><a data-toggle="collapse" class="acordeon" data-parent="accordion" 
		href="#collapse-'.$hola.'">'.$member['caracteristicas_cancer_titulo'][1].'</a><a data-toggle="collapse" class="acordeon icon-collapse" data-parent="accordion" href="#collapse-'.$hola.'"></a></h4></div>';
        echo '<div id="collapse-'.$hola.'" class="panel-collapse collapse"><div class="panel-body">'.$member['caracteristicas_cancer_texto'][1].'</div></div></div>';
      }
    ?>
<?php endwhile; endif; ?>


</div><!--panel-group-->

</div><!--6-->

					<!-- Elastislide Carousel -->
                    <div class="col-md-6">
                    <h2>Otros tipos de Cáncer</h2>
					<ul class="bxslider">
                    <? query_posts('posts_per_page=-1&paged='.$paged.'&post_type=tipo_de_cancer'); ?>
   <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
						<li><a href="<?php the_permalink(); ?>" class="cancerList"><?php the_title(); ?></a></li>
                        <?php endwhile; ?>
					</ul>
                    </div>
					<!-- End Elastislide Carousel -->
                    
</div><!--row-->

<?php /*?>
<div class="row separador">
<div class="col-md-6">
<h2><?php echo get('bloque_texto_1_titulo'); ?></h2>
<p><?php echo get('bloque_texto_1_texto'); ?></p>
</div>

<div class="col-md-6">
<h2><?php echo get('bloque_texto_2_titulo'); ?></h2>
<p><?php echo get('bloque_texto_2_texto'); ?></p>
</div>
</div>
<?php */?>

<?php /*?>
<div class="row">
<div class="col-md-6">
<h2>Otros tipos de Cáncer</h2>

					<ul class="bxslider">
                    <?php $loop = new WP_Query( array( 'post_type' => 'tipo_de_cancer', 'posts_per_page' => -1 ) ); ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
						<li><a href="<?php the_permalink(); ?>" class="cancerList"><?php the_title(); ?></a></li>
                        <?php endwhile; wp_reset_query(); ?>
					</ul>
					<!-- bxslider -->

</div><!--6-->
</div>
<?php */?>

<?php get_sidebar('seguros'); ?>
</div><!--container-->


  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
      <script src="<?php bloginfo('template_directory'); ?>/js/jquery.bxslider.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/jquery.easing.1.3.js"></script>
  <script>
  $('.bxslider').bxSlider({
        mode: 'vertical',
    slideMargin:5,
                minSlides: 5,
                /*maxSlides: 2,*/
                pager:false, 
                infiniteLoop:false,
                hideControlOnEnd:true    
    });
  </script>
  <script>
  //function indefinida, revisar
  //$(function () {
    //$('#myTab a:last').tab('show')
  //});
  jQuery(document).ready(function($) {
    $('.panel-title a' ).click(function(event) {
        $('.panel-collapse').removeClass('in')
        });
    });
</script>
<style type="text/css">
.single-tipo_de_cancer.postid-68 .solicitaSeguro , .single-tipo_de_cancer.postid-74 .solicitaSeguro{ background-color:#ef8eb5}
</style>
<?php get_footer('interior'); ?>