<?php get_header('interior'); ?>
<style>
.bx-controls-direction a{
	display:none;
}
</style>
<div class="container paginas">
<div class="jumbotron pages">
<h1>Noticias</br></h1>
<p><?php the_title(); ?></p>
</div>
<div id="imagenGrande"><?php the_post_thumbnail('pageNoticias', array('class' => 'img-responsive')); ?></div>


<div class="row">
<div class="col-md-6">
<h2><?php the_title(); ?></h2>
<p><?php the_content(); ?></p>
</div>

<div class="col-md-6"><?php get_sidebar('noticias'); ?></div>

</div><!--row-->

</div><!--container-->
<?php get_footer('interior'); ?>