<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
<script src="https://raw.github.com/cowboy/jquery-bbq/v1.2.1/jquery.ba-bbq.js"></script>

<script>
	$(function(){
		$("#test").click(function(){
			window.history.pushState({}, document.title, "ppp.php?ket=123");
		})
	})	
</script>


<div id="test">ÂI§Ú</div>