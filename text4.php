<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.2.1/css/bootstrap-combined.min.css" rel="stylesheet"/>
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.2.1/js/bootstrap.min.js" type="text/javascript"></script>
<script src="http://jquery-watermark.googlecode.com/svn-history/r53/trunk/jquery-watermark/jquery.watermark/jquery.watermark.min.js" type="text/javascript"></script>

<script>
	$(function(){
		$('#example').tooltip();
		
		$("#51cards").click(function(){
			window.location.href = "http://stackoverflow.com";
			return false;
		});
		
		//$('#example').popover(options)
	})
</script>

<body>

<br><br><br><br>

<div class="progress" style="width: 600px; height: 30px; margin-left: 40px">
  <div class="bar bar-success" style="width: 25%; font-size: 16px; padding: 4px;">英文沸騰力</div>
  <div class="bar bar-warning" style="width: 25%;font-size: 16px; padding: 4px;">你三分鐘了嗎</div>
  <div class="bar bar-danger" style="width: 25%;font-size: 16px; padding: 4px; background: gray; color: #aaa">凡走過必留下筆跡</div>
  <div class="bar bar-info" style="width: 25%;font-size: 16px; padding: 4px; background: gray; color: #aaa">和顧問相見歡</div>
</div>

<br><br><br><br><br><br>



　　　　　　
<a href="#" class="btn" rel="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover on bottom">
	Popover on top</a>
		  
<a href="#" class="btn btn-large btn-danger" rel="popover" data-content="And here's some amazing content. It's very engaging. right?" data-original-title="A Title">Click to toggle popover</a>
		  
		  
<br><br><br><br>



<h1>卡片總攬左邊  </h1> 
<div class="accordion" id="accordion2" style="width: 160px">
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne" style="text-decoration: none">
		<span id="51cards" href="http://www.google.com">51 張方法卡</span>
      </a>
    </div>
    <div id="collapseOne" class="accordion-body collapse in">
      <div class="accordion-inner">
        　<a href="http://test.talkin.cc/enisland/product/detail/48?c=0" >Card1 Name</a><br>
		　<a href="http://test.talkin.cc/enisland/product/detail/48?c=0" >Card2 Name</a><br>
		　<a href="http://test.talkin.cc/enisland/product/detail/48?c=0" >Card3 Name</a><br>
		　<a href="http://test.talkin.cc/enisland/product/detail/48?c=0" >Card4 Name</a><br>
		　<a href="http://test.talkin.cc/enisland/product/detail/48?c=0" >Card51 Name</a><br>
      </div>
    </div>
  </div>
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo" style="color: black; text-decoration: none">
		<!--<span class="in"><img src="http://static.wix.com/services/wix-html-template-viewer/1.131.0/new-create/images/ico_close_new.png"></span>-->
        <span id="52cards" >聽說讀寫</span>
      </a>
    </div>
    <div id="collapseTwo" class="accordion-body collapse">
      <div class="accordion-inner">
	  　<a href="http://test.talkin.cc/enisland/product/list/9" >聽</a><br>
	  　<a href="http://test.talkin.cc/enisland/product/list/9">說</a><br>
	  　<a href="http://test.talkin.cc/enisland/product/list/9" >讀</a><br>
	  　<a href="http://test.talkin.cc/enisland/product/list/9" >寫</a><br>
        
      </div>
    </div>
  </div>
</div>

<br><br><br><br><br>

<h1>personal page  </h1>
<ul class="nav nav-tabs">
  <li class="dropdown active">
		<a href="#home" data-toggle="dropdown">Achievement <b class="caret"></b></a>
		<ul class="dropdown-menu">
		  <li class="active"><a href="#dropdown1" data-toggle="tab">I promise</a></li>
		  <li class=""><a data-toggle="tab">showtime</a></li>
		  <li class=""><a data-toggle="tab">Be my guest</a></li>
		  <li class=""><a data-toggle="tab">My english year</a></li>
		  <li class=""><a data-toggle="tab">World traveler</a></li>
		</ul>
  </li>
  <li class="dropdown">
		<a href="#home" data-toggle="dropdown">roadmap <b class="caret"></b></a>
		<ul class="dropdown-menu">
		  <li class="active"><a href="#dropdown1" data-toggle="tab">exercise</a></li>
		  <li class=""><a href="#dropdown1" data-toggle="tab">study plan</a></li>
		  <li class=""><a href="#dropdown3" data-toggle="tab">evaluation results</a></li>
		</ul>
  </li>
  <li class="dropdown"><a href="#messages" data-toggle="tab">Postbox </a></li>
  <li class="dropdown"><a href="#settings" data-toggle="tab">Library </a></li>
  <li class="dropdown"><a href="#settings" data-toggle="dropdown">Classmates </a></li>
</ul>

<br><br><br><br>

</body>
</html>