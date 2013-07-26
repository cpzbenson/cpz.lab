<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
<script src="https://raw.github.com/cowboy/jquery-bbq/v1.2.1/jquery.ba-bbq.js"></script>

<script>
	$(function(){
		$("#test").click(function(){
			window.history.pushState({}, document.title, "ppp.php?ket=123");
		})
		map.enableScrollWheelZoom();
		google.maps.event.addListener(map, 'click', function(event){
			var mapOptions = {
				draggable: true,
				scrollwheel:true
			};
		});
	})	
</script>


<div id="test">ÂI§Ú</div>...
<div width="100%">
	<div style="display: inline-block; width: 30%">
	qweqwe
	</div>

	<div style="display: inline-block; width: 68%">
		<iframe width="100%" height="300" frameborder="0" scrolling="yes" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=24.9889,121.311&amp;ie=UTF&amp;output=embed"></iframe>
		
		<iframe width="425" height="350" frameborder="0" scrolling="yes" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=24.9889,121.311&amp;ie=UTF8&amp;ll=24.9889,121.311&amp;spn=0.011961,0.013797&amp;t=m&amp;z=14&amp;output=embed"></iframe>
	</div>
</div>