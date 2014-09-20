


<script src="https://maps.googleapis.com/maps/api/js?sensor=SET_TO_TRUE_OR_FALSE">
</script> 

<div id="lt-map"></div>

<script type="text/javascript">
	var locations =[ 
    	['Little Tokyo on Leonard Ave.','35.341055','-80.177853', 2],
    	['Tokyo Lounge', '35.373430', '-80.195943', 1] 
	];
	var mapOptions = {
  		center: { lat: 35.3519883, lng: -80.1901338},
  		zoom: 14,
  		scrollwheel: false
    };

    var map = new google.maps.Map(document.getElementById('lt-map'), mapOptions);
    

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
</script>