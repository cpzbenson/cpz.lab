lo<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta name="keywords" content="拎咖啡, Lingabee, 耳掛式咖啡, 濾泡式咖啡" />
		<meta name="description" content="拎咖啡 Lingabee，30 秒讓您品嘗現泡" />
		<meta http-equiv="Content-Language" content="zh-tw" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>登入</title>
		<meta http-equiv="X-UA-Compatible" content="IE=9"></meta>
		
		
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
        <!--<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet"/>
        <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js" type="text/javascript"></script>    
		-->
		
		
		<script>
			$(document).ready(function(){
				//$('body').css('color', 'red');
            });
			
			// create the audio context (chrome only for now)
    var context = new webkitAudioContext();
    var audioBuffer;
    var sourceNode;
 
    // load the sound
    setupAudioNodes();
    loadSound("qwe.mp3");
 
    function setupAudioNodes() {
        // create a buffer source node
        sourceNode = context.createBufferSource();
        // and connect to destination
        sourceNode.connect(context.destination);
    }
 
    // load the specified sound
    function loadSound(url) {
        var request = new XMLHttpRequest();
        request.open('GET', url, true);
        request.responseType = 'arraybuffer';
 
        // When loaded decode the data
        request.onload = function() {
 
            // decode the data
            context.decodeAudioData(request.response, function(buffer) {
                // when the audio is decoded play the sound
                playSound(buffer);
            }, onError);
        }
        request.send();
    }
 
 
    function playSound(buffer) {
        sourceNode.buffer = buffer;
        sourceNode.noteOn(0);
    }
 
    // log if an error occurs
    function onError(e) {
        console.log(e);
    }
			
		</script>
		<style type="text/css" >
		.casd{
			
		}
		</style>
	</head>
			
	<body  style="width:800px; margin: 0 auto">
			
			<style type="text/css">
				
			</style>

			<div class="zoom">
			   
			</div>



	</body>




	</body>
</html>
