
<div class="row">
<div class="sidebarSeguros">

 <?php query_posts( 'page_id=13' );?>
 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
 <h2>Seguros Oncológicos</h2>

<div class="col-sm-6 col-md-5 col-lg-6 Insurance">
<small class="above">Desde</small>
<h2>0,7 <small>UF</small></h2>
<small class="sub">Mensuales / Contrato Anual</small>
<p><?php the_content(); ?></p>
<a href="<?php echo get_permalink(); ?>" class="btn btn-lg btn-default btnAsegurado">Información de Seguros</a>
</div>
 <?php endwhile; endif; ?>
 <?php wp_reset_query(); ?>

<? query_posts('posts_per_page=1&orderby=rand&paged='.$paged.'&post_type=testimonio'); ?>
<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
<div class="col-sm-6 col-md-5 col-lg-6 Testi">
<p>"<? echo truncate(get_the_excerpt(), 150, ' '); ?>"</p>
 <?php the_post_thumbnail('testimonioBig', array('class' => 'img-responsive')); ?>  	
</div>
    <?php endwhile; ?> 
</div>
</div>
