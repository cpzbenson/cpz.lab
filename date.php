<!doctype html>
 
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>jQuery UI Datepicker - Default functionality</title>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css" />
  <script>
  $(function() {
    
	$( "#datepicker" ).datepicker({
		onSelect: function(date, inst){
			alert(date);				
		}
	});
  });
  </script>
</head>
<body>
 
<p><div id="datepicker">Date: </div></p>
 
 
</body>
</html>