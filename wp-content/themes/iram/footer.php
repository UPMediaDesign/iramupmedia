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
		
		
		var myLatlng = new google.maps.LatLng(-33.401423,-70.587319);  
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
		var myLatlng = new google.maps.LatLng(-33.401423,-70.587319);
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
</div>
</div>
</div>

<div class="container">
<div class="row">



<div class="col-xs-6 col-sm-3 foot">
<h3>Contacto</h3>
<p>Fono: (+562) 2 754-1700</br>
Fax: (+562) 2 228-7003 / (+562) 2 754-1751</br>
E-mail: <a target="_blank" href="mailto:iram@iram.cl">iram@iram.cl</a></p>
</div>

<div class="col-xs-6 col-sm-3 foot">
<h3>Website</h3>
<ul>
<li><a href="<?php echo home_url() ?>">Inicio</a></li>
<li><a href="<?php echo home_url() ?>/quienes-somos/nuestra-filosofia">Nuestra Filosofía</a></li>
<li><a href="<?php echo home_url() ?>/seguros">Seguro Oncológico</a></li>
<li><a href="<?php echo home_url() ?>/info-pacientes/que-es-el-cancer">¿Qué es el Cáncer?</a></li>
<li><a href="<?php echo home_url() ?>/noticias">Noticias</a></li>
<li><a href="<?php echo home_url() ?>/contacto">Contacto</a></li>
<li><a href="http://www.iram.cl/wp-content/uploads/2014/12/2014-ARANCELES-IRAM-VIGENTES-RECEPCION-LEY-.docx" target="_blank">Aranceles Particulares</a></li>
<li><a href="http://www.iram.cl/wp-content/uploads/2014/12/2014-20-soluciones-integrales-de-salud.docx" target="_blank">Las 20 Soluciones Integrales de Salud</a></li>
</ul>
</div>

<div class="col-xs-6 col-sm-3 foot">
<h3>Tipos de Cáncer</h3>
<ul>
<li><a href="<?php echo home_url() ?>/tipo_de_cancer/cancer-de-mamas/">Cáncer de Mamas</a></li>
<li><a href="<?php echo home_url() ?>/tipo_de_cancer/cancer-de-pulmon/">Cáncer de Pulmón</a></li>
<li><a href="<?php echo home_url() ?>/tipo_de_cancer/cancer-de-vejiga/">Cáncer de Vejiga</a></li>
<li><a href="<?php echo home_url() ?>/tipo_de_cancer/cancer-de-piel/">Cáncer de Piel</a></li>
<li><a href="<?php echo home_url() ?>/tipo_de_cancer/cancer-de-prostata/">Cáncer de Próstata</a></li>
<li><a href="<?php echo home_url() ?>/tipo_de_cancer/cancer-de-colon/">Cáncer de Colon</a></li>
<li><a href="<?php echo home_url() ?>/tipo_de_cancer/tumores-ginecologicos/">Tumores Ginecológicos</a></li>
</ul>
</div>

<div class="col-xs-6 col-sm-3 foot">
<br>
<br>
<h3></h3>
<ul>
<li><a href="<?php echo home_url() ?>/tipo_de_cancer/cancer-de-boca-y-esofago/">Cáncer de Boca y Esófago</a></li>
<li><a href="<?php echo home_url() ?>/tipo_de_cancer/cancer-de-higado/">Cáncer de Hígado</a></li>
<li><a href="<?php echo home_url() ?>/tipo_de_cancer/cancer-de-estomago/">Cáncer de Estómago</a></li>
<li><a href="<?php echo home_url() ?>/tipo_de_cancer/cancer-de-pancreas/">Cáncer de Páncreas</a></li>
<li><a href="<?php echo home_url() ?>/tipo_de_cancer/enfermedad-de-hodgkin/">Enfermedad de Hodgkin</a></li>
<li><a href="<?php echo home_url() ?>/tipo_de_cancer/linfomas-no-hodgkin/">Linfomas no Hodgkin</a></li>
<li><a href="<?php echo home_url() ?>/tipo_de_cancer/leucemias-agudas/">Leucemias Agudas</a></li>
<li><a href="<?php echo home_url() ?>/tipo_de_cancer/leucemias-cronicas/">Leucemias Crónicas</a></li>
</ul>
</div>

<div id="copyright">Todos los derechos reservados iram© Copyright 2014 - <strong>Ubicación:</strong> Américo Vespucio Norte 1314, Vitacura Región Metropolitana, Santiago - Chile</div>

</div>
</div><!--footHeading-->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-53441990-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>