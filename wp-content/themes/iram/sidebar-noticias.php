<h2>Otras Noticias</h2>

<? query_posts('posts_per_page=6&orderby=rand&paged='.$paged.'&post_type=noticia'); ?>
   <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
    <div class="col-md-4 pd0sidemobile">
    <?php the_post_thumbnail('imagenPage', array('class' => 'img-responsive')); ?>
    
    <div class="fecha">Noticias · <?php the_time('M') ?> <?php the_time('d') ?> <?php the_time('Y') ?></div>
    <div class="n"><h4><? echo truncate(get_the_title(), 40, ' '); ?></h4>
    <p><? echo truncate(get_the_excerpt(), 100, ' '); ?></p></div>
    <a class="linkN" href="<?php the_permalink(); ?>">Ver +</a>
    </div>
    <?php endwhile; ?>