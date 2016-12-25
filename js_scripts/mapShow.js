function initMap() {
	var uluru = {lat: 35.1546928, lng: 33.37952819999998};
	var map = new google.maps.Map(document.getElementById('map'), {
		zoom: 16,
		center: uluru,
		mapTypeId:google.maps.MapTypeId.ROADMAP
	});
	var marker = new google.maps.Marker({
		position: uluru,
		map: map
	});
}

initMap();