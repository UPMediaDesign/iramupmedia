<?php
/*
Template Name: Home
*/
?>
<?php get_header(); ?>

<div id="slides">

      <ul class="slides-container">
      <? query_posts('posts_per_page=-1&paged='.$paged.'&post_type=slider'); ?>
   <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
   
        <li>
        
        <?php the_post_thumbnail('page-thumb', array('class' => 'featurette-image img-responsive')); ?>
        <div class="caption jumbotron home">
        <h1><?php the_title(); ?></h1>
        <p><? echo truncate(get_the_excerpt(), 100, ' '); ?></p>
        <?php 
     $value  = get_field ('boton_link',1) ;
       foreach ( $value  as  $my_val ) { 
	   echo '<a class="btn btn-primary btn-lg cyan" role="button" href="'.get_the_permalink($my_val).'">Saber Más</a>';
	   echo '</br>';
     }
	 
 ?> 
        </div>
        </li>
        
        
         <?php endwhile; ?>
          </ul>
          
    <nav class="slides-navigation">
      <a href="#" class="next">Next</a>
      <a href="#" class="prev">Previous</a>
    </nav>
    
  </div><!--slides-->
  
  
  <div class="container">
  <div class="row">
  
  <?php query_posts( 'page_id=88' );?>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div class="col-md-4 boxes">
  <h3><?php the_title(); ?></h3>
  <div class="overlap"><p><? echo truncate(get_the_excerpt(), 100, ' '); ?></p>
  <a href="<?php the_permalink(); ?>" class="btn btn-primary btn-lg white">Ver Más +</a>
  </div>
  <div class="overlap2"></div>
  <?php the_post_thumbnail('home-boxes', array('class' => 'img-responsive')); ?>
  </div>
  <?php endwhile; endif; ?>
  <?php wp_reset_query(); ?>
  
  
  
  
  <?php query_posts( 'page_id=43' );?>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div class="col-md-4 boxes">
   <h3><?php the_title(); ?></h3>
  <div class="overlap"><p><? echo truncate(get_the_excerpt(), 100, ' '); ?></p>
  <a href="<?php the_permalink(); ?>" class="btn btn-primary btn-lg white">Ver Más +</a>
  </div>
  <div class="overlap2"></div>
  <?php the_post_thumbnail('home-boxes', array('class' => 'img-responsive')); ?>
  </div>
  <?php endwhile; endif; ?>
  <?php wp_reset_query(); ?>
  
  
  
  
  <?php query_posts( 'page_id=13' );?>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div class="col-md-4 boxes">
    <h3><?php the_title(); ?></h3>
  <div class="overlap"><p><? echo truncate(get_the_excerpt(), 100, ' '); ?></p>
  <a href="<?php the_permalink(); ?>" class="btn btn-primary btn-lg white">Ver Más +</a>
  </div>
  <div class="overlap2"></div>
  <?php the_post_thumbnail('home-boxes', array('class' => 'img-responsive')); ?>
  </div>
  <?php endwhile; endif; ?>
  <?php wp_reset_query(); ?>
  
  </div><!--row-->
  </div><!--container-->
  

  <div class="container  title"> 
  <div class="row">
  
  <div class="col-md-8">
  <?php query_posts( 'page_id=88' );?>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <h2><?php the_title(); ?></h2>
  <p><? echo truncate(get_the_excerpt(), 250, ' '); ?></p>
  <a href="<?php the_permalink(); ?>" class="btn btn-primary btn-lg cyan">Leer Más +</a>
  
 <?php endwhile; endif; ?>
  <?php wp_reset_query(); ?>
  </div>

					<!-- Elastislide Carousel -->
                    <div class="col-md-4">
					<ul class="bxslider">
                    <? query_posts('posts_per_page=-1&paged='.$paged.'&post_type=tipo_de_cancer'); ?>
   <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
						<li><a href="<?php the_permalink(); ?>" class="cancerList"><?php the_title(); ?></a></li>
                        <?php endwhile; ?>
					</ul>
					<!-- End Elastislide Carousel -->
                    </div>
    </div>     
    
   
    
               
	</div><!--container-->
    
    <div class="container title">
        <div class="row separador">
    <div class="container"><h2>Noticias</h2></div>
    <? query_posts('posts_per_page=3&paged='.$paged.'&post_type=noticia'); ?>
   <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
    <div class="col-md-4">
    <?php the_post_thumbnail('imagenPage', array('class' => 'img-responsive')); ?>
    
    <div class="fecha">Noticias · <?php the_time('M') ?> <?php the_time('d') ?> <?php the_time('Y') ?></div>
    <div class="n"><h4><? echo truncate(get_the_title(), 40, ' '); ?></h4>
    <p><? echo truncate(get_the_excerpt(), 100, ' '); ?></p></div>
    <a class="linkN" href="<?php the_permalink(); ?>">Ver +</a>
    </div>
    <?php endwhile; ?>
    </div>
    </div>
    
    
    
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
      <script src="<?php bloginfo('template_directory'); ?>/js/jquery.bxslider.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/jquery.easing.1.3.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/jquery.animate-enhanced.min.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/hammer.min.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/jquery.superslides.js" type="text/javascript" charset="utf-8"></script>
  <script>
    $(function() {
      var $slides = $('#slides');

      Hammer($slides[0]).on("swipeleft", function(e) {
        $slides.data('superslides').animate('next');
      });

      Hammer($slides[0]).on("swiperight", function(e) {
        $slides.data('superslides').animate('prev');
      });

      $slides.superslides({
        hashchange: true
      });
    });

  </script>
    <script>
    $('#slides').superslides({
      animation: 'fade'
    });
  </script>
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
<?php get_footer(); ?>