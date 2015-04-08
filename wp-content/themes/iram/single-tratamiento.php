<?php get_header('interior'); ?>
<style>
.bx-controls-direction a{
}
</style>
<div class="container paginas">
<div class="jumbotron pages">
<h1><?php the_title(); ?></br><strong><?php echo get('segundo_titulo_tratamiento'); ?></strong></h1>
<p><?php echo get('descripcion_corta_tratamiento'); ?></p>
<a href="/seguro-oncologico" class="solicitaSeguro">Solicita tu Seguro Oncológico</a>
</div>
<div id="imagenGrande"><?php the_post_thumbnail('pageNoticias', array('class' => 'img-responsive')); ?></div>


<div class="row">
<div class="col-md-6">
<?php the_content(); ?>
</div>

<div class="col-md-6">

<h2>Fases del Tratamiento</h2>

<div class="panel-group" id="accordion">



<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
<?php
$id = get_the_ID();?>
<?php
      // second way to get the fields
 
      // get_group will retunr an array of all the groups and the group's fields
      // the parameter for this function is the group's name
      $members = get_group('fases_tratamiento');
      // to see how the array is formed you can use pr($members);
      // the way the array is formed is
      // [group index][field name][field index]
      // The image fields in the array have one more level where the letter "original" and "thumb" which will show
      // the original or the thumbnail image
	  $hola = 0;
      foreach($members as $member){
		  $hola++;
        echo '<div class="panel panel-default"><div class="panel-heading"><h4 class="panel-title"><a data-toggle="collapse" class="acordeon" data-parent="accordion" 
		href="#collapse-'.$hola.'">'.$member['fases_tratamiento_titulo'][1].'</a><a data-toggle="collapse" class="acordeon icon-collapse" data-parent="accordion" href="#collapse-'.$hola.'"></a></h4></div>';
        echo '<div id="collapse-'.$hola.'" class="panel-collapse collapse"><div class="panel-body">'.$member['fases_tratamiento_texto'][1].'</div></div></div>';
      }
    ?>
<?php endwhile; endif; ?>


</div><!--panel-group-->

</div><!--6-->

</div><!--row-->


<div class="row separador">
<div class="col-md-6" style="margin:30px 0px;">
<h2>Especialistas en el Área</h2>
<ul class="bxslider">


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
 <?php 
     $value  = get_field ('especialistas',1) ;
       foreach ( $value  as  $my_val ) { 
	   echo '<li><a href="'.get_the_permalink($my_val).'" class="cancerList">'.get_the_title($my_val).'</a></li>';
     }
	 
 ?> 
<?php endwhile; endif; ?>
  </ul>
  </div>



<div class="col-md-6" style="margin:30px 0px;">
<h2>Tecnología</h2>

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="item active">
      <?php echo get_image('fotos_tecnologia',1);?>
    </div>

    
    <div class="item">
      <?php echo get_image('fotos_tecnologia',1,2);?>
    </div>

<?php endwhile; endif; ?>
    
  </div><!--carousel inner-->

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
  
</div>


</div><!--col-->
</div><!--row-->
<?php get_sidebar('seguros'); ?>
</div><!--container-->

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
      <script src="<?php bloginfo('template_directory'); ?>/js/jquery.bxslider.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/jquery.easing.1.3.js"></script>
  <script>
  $('.bxslider').bxSlider({
        mode: 'vertical',
    slideMargin:5,
                minSlides: 4,
                /*maxSlides: 2,*/
                pager:false, 
                infiniteLoop:false,
                hideControlOnEnd:true    
    });
  </script>
<?php get_footer('interior'); ?>