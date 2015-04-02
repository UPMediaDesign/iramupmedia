<?php
/*
Template Name: Contacto
*/
?>
<?php get_header('interior'); ?>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&sensor=false"></script>
        
        <script type="text/javascript">
           	// Enable the visual refresh
	google.maps.visualRefresh = true;
      function initialize() {
		/***********estilo de mapa***********/
		var styles = [
    {
        "featureType": "all",
        "elementType": "all",
        "stylers": [{hue:'#2c3e50'},{saturation:250}]},{featureType:'road',elementType:'geometry',stylers:[{lightness:50},{visibility:'simplified'}]},{featureType:'road',elementType:'labels',stylers:[{visibility:'off'}]}]
		
		  // Create a new StyledMapType object, passing it the array of styles,
		  // as well as the name to be displayed on the map type control.
		  var styledMap = new google.maps.StyledMapType(styles,
			{name: "Iram Expertos en Oncología"});
		
		
		var myLatlng = new google.maps.LatLng(-33.402139,-70.587144);  
        var mapOptions = {
          center: myLatlng,
          zoom: 17,
		  scrollwheel: false,
		  panControl: true,
    	  zoomControl: true,
   		  scaleControl: true,
		  mapTypeControl: true,
 		  streetViewControl: true,
  		  overviewMapControl: true,
		  draggable:false,
		  mapTypeControlOptions: {
      		style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
			position: google.maps.ControlPosition.TOP_RIGHT,
			mapTypeIds: [google.maps.MapTypeId.ROADMAP, google.maps.MapTypeId.SATELLITE , google.maps.MapTypeId.TERRAIN, 'map_style']
   		  },
		  zoomControlOptions: {
      		style: google.maps.ZoomControlStyle.SMALL,
			position: google.maps.ControlPosition.TOP_LEFT
   		  },
          mapTypeId: google.maps.MapTypeId.HYBRID
		  
        };
		
		
        var map = new google.maps.Map(document.getElementById('map'),
    		mapOptions);
			
			//Associate the styled map with the MapTypeId and set it to display.
 			map.mapTypes.set('map_style', styledMap);
  			map.setMapTypeId('map_style');
		
		var image = 'http://iram.upmedia.cl/wp-content/themes/iram/images/pin.png';	
		var myLatlng = new google.maps.LatLng(-33.402139,-70.587144);
		var marker = new google.maps.Marker({
      		position: myLatlng,
     		map: map,
      		title: 'hola',
			icon : image
  		});
		
		/* var contentString = '<div id="content" style=" background-color:#fff; color:#525225"><h3 style="color:#525252 !important; font-size: 14px !important">Contacto</h3></div>';

		var infowindow = new google.maps.InfoWindow({
			content: contentString
		}); */
		
		





google.maps.event.addListener(marker, 'click', function() {
  infowindow.open(map,marker);
});
		
		 google.maps.event.addListener(map, 'click', function(event){
          map.setOptions({draggable: false, scrollwheel: false});
        }); 
		
			
      }
      google.maps.event.addDomListener(window, 'load', initialize);
			
        </script>

<div class="container paginas">
<div class="jumbotron pages">
<h1><?php the_title(); ?></br><strong><?php echo get('segundo_titulo'); ?></strong></h1>
<p><?php echo get('descripcion_corta'); ?></p>
</div>
<div id="map"></div>


<div id="estacionamiento" style="text-align:center; display:inline-block !important; margin:40px 0px 0px 0px;"><img src="<?php bloginfo('template_directory'); ?>/images/estacionamiento.png" class="img-responsive"/></div>


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


<?php the_content(); ?>

</div><!--container-->



<?php get_footer('interior'); ?>