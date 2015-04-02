<div class="picBg">
<div class="container">

<div class="row">
<div class="contentPic">
<h3>Más de 40 años haciendo compromiso con la vida</h3>
<p>Trabajamos día a día por la calidad y la optimización del ambiente de trabajo para lograr la excelencia en el servicio al paciente: nuestro objetivo.</p>
</div>
</div>

</div>
</div>

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







<div id="map"></div>



<div class="container">
<div class="row">

<div class="col-sm-5 col-sm-offset-2 col-md-6 col-md-offset-0 empresas">
<h3>Convenios Hospitalización</h3>
<div class="logos"><img class="featurette-image img-responsive" src="<?php bloginfo('template_directory'); ?>/images/clinicas.jpg"  /></div>
</div>


<div class="col-sm-5 col-sm-offset-2 col-md-6 col-md-offset-0 empresas">
<h3>Empresas Asociadas</h3>
<div class="logos"><img class="featurette-image img-responsive" src="<?php bloginfo('template_directory'); ?>/images/asociados.jpg"  /></div>
</div>

</div>
</div>





<div class="footHeading">
<div class="container">
<div class="row">
<div class="logoFoot"></div>
<div class="socialFoot"><a href="#" class="facebook"></a> <a href="#" class="twitter"></a></div>
</div>
</div>
</div>

<div class="container">
<div class="row">

<div class="col-md-4 foot">
<h3>Ubicación</h3>
<p>Américo Vespucio Norte 1314, Vitacura
Región Metropolitana, Santiago - Chile</p>
</div>

<div class="col-md-4 foot">
<h3>Contacto</h3>
<p>Fono: (+562) 2 754-1700</br>
Fax: (+562) 2 228-7003 / (+562) 2 754-1751</br>
E-mail: <a target="_blank" href="mailto:iram@iram.cl">iram@iram.cl</a></p>
</div>

<div class="col-md-4 foot">
<h3>Website</h3>
<ul>
<li><a href="<?php echo home_url() ?>">Inicio</a></li>
<li><a href="<?php echo home_url() ?>/quienes-somos/nuestra-filosofia">Nuestra Filosofía</a></li>
<li><a href="<?php echo home_url() ?>/seguros">Seguros</a></li>
<li><a href="<?php echo home_url() ?>/info-pacientes/que-es-el-cancer">¿Qué es el Cáncer?</a></li>
<li><a href="<?php echo home_url() ?>/noticias">Noticias</a></li>
<li><a href="<?php echo home_url() ?>/contacto">Contacto</a></li>
</ul>
</div>

<div id="copyright">Todos los derechos reservados iram© Copyright 2014</div>

</div>
</div><!--footHeading-->
</body>
</html>