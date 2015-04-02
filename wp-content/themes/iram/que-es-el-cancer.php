<?php
/*
Template Name: ¿Qué es el Cáncer?
*/
?>
<?php get_header('interior'); ?>
<style>
.bx-controls-direction a{
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
<?php the_content(); ?>
</div>
<div class="col-md-6">
<h2>Tipos de Cáncer</h2>

					<ul class="bxslider">
                    <?php $loop = new WP_Query( array( 'post_type' => 'tipo_de_cancer', 'posts_per_page' => -1 ) ); ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
						<li><a href="<?php the_permalink(); ?>" class="cancerList"><?php the_title(); ?></a></li>
                        <?php endwhile; wp_reset_query(); ?>
					</ul>
					<!-- bxslider -->

</div><!--6-->
</div><!--row-->


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


<div class="col">
<h2>Estadísticas de Recuperación según año de diagnóstico</h2>



<ul class="nav nav-tabs" role="tablist" id="myTab">
  <li class="active"><a href="#home" role="tab" data-toggle="tab">1975-1977</a></li>
  <li><a href="#profile" role="tab" data-toggle="tab">1984-1986</a></li>
  <li><a href="#messages" role="tab" data-toggle="tab">1996-2003</a></li>
</ul>

<!--INFO TABS-->

<div class="tab-content">
  <div class="tab-pane fade in active" id="home">
  
  
    <div class="progress">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100" style="width: 93%">Tiroide: 93%</div>
        </div> 
        
        
          <div class="progress">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">Cuerpo Útero: 80%</div>
        </div>  
        
        
          <div class="progress">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">Mama: 75%</div>
        </div> 
        
          <div class="progress">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="74" aria-valuemin="0" aria-valuemax="100" style="width: 74%">Linfoma Hodgkin: 74%</div>
        </div> 
        
        
          <div class="progress">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">Cérvico Uterino: 70%</div>
        </div> 
        
        
          <div class="progress">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="69" aria-valuemin="0" aria-valuemax="100" style="width: 69%">Próstata: 69%</div>
        </div> 
        
        
          <div class="progress">
  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width: 48%">Linfoma No Hodgkin: 48%</div>
        </div> 
        
                
  <div class="progress">
  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" style="width: 35%">Leucemia: 35%</div>
        </div> 


  <div class="progress">
  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="24" aria-valuemin="0" aria-valuemax="100" style="width: 24%">Cerebro: 24%</div>
        </div> 
        
        
 <!-- <div class="progress">
  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="13" aria-valuemin="0" aria-valuemax="100" style="width: 13%">Pulmón: 13%</div>
        </div>-->
 
        
  <!--<div class="progress">
  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" style="width: 2%">Páncreas: 2%</div>
        </div> -->    
        
        
  <!--<div class="progress">
  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="16" aria-valuemin="0" aria-valuemax="100" style="width: 16%">Estómago: 16%</div>
        </div> -->                
            
  </div>
  
  <div class="tab-pane fade" id="profile">
  
  
    <div class="progress">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="94" aria-valuemin="0" aria-valuemax="100" style="width: 94%">Tiroide: 94%</div>
        </div> 
  
  
    <div class="progress">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="84" aria-valuemin="0" aria-valuemax="100" style="width: 84%">Cuerpo Útero: 84%</div>
        </div>  
        
        
          <div class="progress">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="79" aria-valuemin="0" aria-valuemax="100" style="width: 79%">Mama: 79%</div>
        </div> 
        
        
          <div class="progress">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="79" aria-valuemin="0" aria-valuemax="100" style="width: 79%">Linfoma Hodgkin: 79%</div>
        </div> 
        
        
        
  <div class="progress">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100" style="width: 76%">Próstata: 76%</div>
        </div> 
        
        
           
  <div class="progress">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%">Cérvico Uterino: 68%</div>
        </div>  
        
        
          <div class="progress">
  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="53" aria-valuemin="0" aria-valuemax="100" style="width: 53%">Linfoma No Hodgkin: 53%</div>
        </div>  
        
        
          <div class="progress">
  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100" style="width: 42%">Leucemia: 42%</div>
        </div> 
  
  
  <div class="progress">
  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="29" aria-valuemin="0" aria-valuemax="100" style="width: 29%">Cerebro: 29%</div>
        </div> 
        
        

      
            


          <!--<div class="progress">
  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="3" aria-valuemin="0" aria-valuemax="100" style="width: 3%">Páncreas: 3%</div>
        </div>  -->   
        
        
          <!--<div class="progress">
  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="13" aria-valuemin="0" aria-valuemax="100" style="width: 13%">Pulmón: 13%</div>
        </div>-->
        
        
  <!--<div class="progress">
  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100" style="width: 18%">Estómago: 18%</div>
        </div> -->        
  
  </div>
  
  <div class="tab-pane fade" id="messages">
  
    <div class="progress">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100" style="width: 99%">Próstata: 99%</div>
        </div> 
        
          <div class="progress">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="97" aria-valuemin="0" aria-valuemax="100" style="width: 97%">Tiroide: 97%</div>
        </div> 
        
          <div class="progress">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width: 89%">Mama: 89%</div>
        </div> 
        
        
          <div class="progress">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%">Linfoma Hodgkin: 86%</div>
        </div> 
        
          <div class="progress">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="84" aria-valuemin="0" aria-valuemax="100" style="width: 84%">Cuerpo Útero: 84%</div>
        </div>  
        
           
  <div class="progress">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100" style="width: 73%">Cérvico Uterino: 73%</div>
        </div> 
        
         
  <div class="progress">
  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="64" aria-valuemin="0" aria-valuemax="100" style="width: 64%">Linfoma No Hodgkin: 64%</div>
        </div> 
        
        
          <div class="progress">
  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">Leucemia: 50%</div>
        </div> 
        
               
  
    <div class="progress">
  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" style="width: 35%">Cerebro: 35%</div>
        </div> 
        

        
          <!--<div class="progress">
  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="16" aria-valuemin="0" aria-valuemax="100" style="width: 16%">Pulmón: 16%</div>
        </div>-->
        
        
          <!--<div class="progress">
  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100" style="width: 5%">Páncreas: 5%</div>
        </div>   --> 
         
        
  <!--<div class="progress">
  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="24" aria-valuemin="0" aria-valuemax="100" style="width: 24%">Estómago: 24%</div>
        </div> --> 
  
  </div>
  
  
  
  
</div>

</div><!--col-->
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
  $(function () {
    $('#myTab a:last').tab('show')
  })
</script>

<?php get_footer('interior'); ?>