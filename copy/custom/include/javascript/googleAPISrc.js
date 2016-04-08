function initializeGoogleAPISrc() {
	// Custom Callback information here
	// console.log();
}

function loadGoogleAPISrc() {
	var script = document.createElement('script');
	script.type = 'text/javascript';
	script.src = 'https://maps.googleapis.com/maps/api/js?libraries=places&sensor=false&' +
		'callback=initializeGoogleAPISrc';
	document.body.appendChild(script);
}

$(function() {
  loadGoogleAPISrc();
});