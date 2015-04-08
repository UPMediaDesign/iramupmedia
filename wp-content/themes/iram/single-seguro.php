<?php get_header('interior'); ?>
<style>
.bx-controls-direction a{
	display:none;
}
</style>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<div class="container paginas">
<div class="jumbotron pages">
<div class="datosPrecios2">DESDE<br/><strong><?php echo get('datos_precio');?></strong></div>
<h1><?php the_title(); ?></br><strong><?php echo get('segundo_titulo'); ?></strong></h1>
<p><?php echo get('descripcion_corta'); ?></p>
</div>
<div id="imagenGrande"><?php the_post_thumbnail('imagenPage', array('class' => 'img-responsive')); ?></div>


<div class="row">
<div class="col-md-6">
<?php the_content(); ?>
</div>

<div class="col-md-6">
<div id="seguro1">
<?php echo get('formulario'); ?>
</div>
</div>

</div><!--row-->

<div class="container">
<div class="row">
<h2>Entidades Aseguradoras</h2>


	  <?php
	  
	  
	  
      // first way, using get_order_field and get
 
      // the get_order_field function returns an array with the field's index
      // the parameter for this function is the field's name
      $galeria_fotos = get_order_field('aseguradora');
	  
	  if(is_array($galeria_fotos)){ foreach($galeria_fotos as $galeria_foto){ $galeria_foto_url = get('galeria_foto',1,$galeria_foto); echo "<div class='col-xs-6 col-md-2'>" . get_image('aseguradora',1,$galeria_foto) . "</div>"; } }
 
      foreach($galeria_fotos as $galeria_foto){
         // The first parameter for get is the field's name, the second is the group's index. If this
         // field is not in a group that can be duplicated it should be 1. The third parameter is the field's index
         
      }
    ?>

</div>
</div>

</div><!--container-->


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery.rut.js"></script>
    <script type="text/javascript">
      $(function(){
        $("#rutt").rut();
        $("#rutttt").rut({formatOn: 'keyup'});
        $("#rut").rut({formatOn: 'keyup', validateOn: 'keyup'}).on('rutInvalido', function(){ $(this).parents(".control-group").addClass("error")}).on('rutValido', function(){ $(this).parents(".control-group").removeClass("error")});
        $("form#extraer-cuerpo input").rut().on('rutValido', function(e, rut){alert("Su RUT sin DV es " + rut);});
      });
    </script>
    <script>
	$(document).ready(function() {
    $("#telNumber,#rut").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) || 
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
});
	</script>

<?php endwhile; else: ?>
Sorry, no posts matched your criteria.
<?php endif; ?>
  
<?php get_footer('interior'); ?>