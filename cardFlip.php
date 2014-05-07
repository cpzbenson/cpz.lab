<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>登入</title>
		<!--<link rel="stylesheet" type="text/css" href="styles/login_regi.css" />-->
		<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
		<script>
		</script>
		
		<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet"/>
        <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="http://jquery-watermark.googlecode.com/svn-history/r53/trunk/jquery-watermark/jquery.watermark/jquery.watermark.min.js" type="text/javascript"></script>
		
		
		<meta http-equiv="X-UA-Compatible" content="IE=9"></meta>
		<script>
			$(document).ready(function(){

            });
		</script>
		<style type="text/css" >
body {
 background: #ccc;   
}
.flip {
  -webkit-perspective: 800;
   width: 400px;
   height: 200px;
    position: relative;
    margin: 50px auto;
}
.flip .card:hover {
  -webkit-transform: rotatey(-180deg);
}
.flip .card {
  width: 100%;
  height: 100%;
  -webkit-transform-style: preserve-3d;
  -webkit-transition: 0.5s;
}
.flip .card .face {
  width: 100%;
  height: 100%;
  position: absolute;
  -webkit-backface-visibility: hidden ;
  z-index: 2;
    font-family: Georgia;
    font-size: 3em;
    text-align: center;
    line-height: 200px;
}
.flip .card .front {
  position: absolute;
  z-index: 1;
    background: black;
    color: white;
    cursor: pointer;
}
.flip .card .back {
  -webkit-transform: rotatey(-180deg);
    background: blue;
    background: white;
    color: black;
    cursor: pointer;
}
		</style>
	</head>
			
	<body>
		<div class="flip"> 
	        <div class="card"> 
	            <div class="face front"> 
	                Front
	            </div> 
	            <div class="face back"> 
	                Back
	            </div> 
	        </div> 
	    </div> 

	</body>
</html>