<?php
/*
Template Name: Seguros
*/
?>
<?php get_header('interior'); ?>

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


<div class="row separador">


 <? query_posts('posts_per_page=-1&paged='.$paged.'&post_type=seguro'); ?>
<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>


<div class="col-md-4">				
            <?php
$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 1000,300 ), false, '' );
?>    
<a style="background: url(<?php echo $src[0]; ?>); -webkit-border-radius: 5px; border-radius: 5px;" href="<?php echo get_permalink(); ?>" class="seguros">
<div class="datosPrecios">DESDE<br/><strong><?php echo get('datos_precio');?></strong></div>
<figure class="effect-ruby">

<figcaption>
<h2><?php the_title(); ?></h2>
<p>Ver Más +</p>
</figcaption>
</figure>
</a>
</div>

<?php endwhile; ?> 

</div><!--separador-->

</div><!--container-->

<?php get_footer('interior'); ?>