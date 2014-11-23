


<script src="https://maps.googleapis.com/maps/api/js?sensor=SET_TO_TRUE_OR_FALSE">
</script> 
<div id="main">
  <div id="lt-map"></div>
</div>
<script type="text/javascript">
	var locations =[ 
    	[
        '<strong>Little Tokyo on Leonard Ave.</strong><br>Hours: <br /> Sun-Thurs: 10am - 9pm, <br /> Fri & Sat: 10am - 9:30pm <br /> <a href="tel:7049852726"> (704)985-2726 </a>',
        '35.341055',
        '-80.177853',
        2
      ],
      [
        '<strong>Tokyo Lounge</strong><br /> Hours: <br /> Sun-Thurs: 10am - Midnight, <br /> Fri & Sat: 10am - 2am <br> <a href="tel:7049851692"> (704)985-1692 </a>', 
        '35.373430', 
        '-80.195943', 
        1
      ] 
	];
	var mapOptions = {
  		center: { lat: 35.3519883, lng: -80.1901338},
  		zoom: 14,
  		scrollwheel: false
    };

    var map = new google.maps.Map(document.getElementById('lt-map'), mapOptions);
    
    var tokyoLoungeData = new google.maps.Marker({
      map: map,
      position: google.maps.LatLng(35.341055, -80.173),
      formatted_phone_number: '3366762087'

    });
    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map,
        height: 500
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
</script>