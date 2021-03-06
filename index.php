<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>MoneyMonth</title>
		<meta name="description" content="Four Boxes Slideshow: Recreating the background image slideshow seen on Atelier Serge Thoroval's website" />
		<meta name="keywords" content="background slideshow, boxes, background image, four panels, css, tutorial" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link href='http://fonts.googleapis.com/css?family=Raleway:200,400,600' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
<title>MoneyMonth</title>
<style>
	body{ background:url('background.png'); font-family: 'Arial'}
	#logo{width: 644px; height:auto; margin:0 auto; margin-top:210px; }
	#form_show{width: 644px; margin: 0 auto; margin-top: 30px;}
	#form_show .forminput{ padding:10px 20px; border:none; font-size: 1.4em; width: 500px; margin: 5px; outline-color: #58ACFA; font-family: 'Open Sans Light'}
	.button_login{ background: #58ACFA; color:white; padding:10px 20px; border:none; font-size: 1.4em; width: 500px; margin: 0px; outline: none; border-bottom: 5px solid #58ACFA; border-radius:5px; font-family: 'Open Sans Light'; }
	.button_login:hover{ border-bottom:2px solid #2E64FE; margin-top: 3px; cursor: pointer; }
</style>
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
</head>
<body>
<div class="container">
			<!-- Top Navigation -->
		
<div class="container">
			<div id="boxgallery" class="boxgallery" data-effect="effect-2">
				<div class="panel"><img src="img/3.jpg" alt="Image 3"/></div>
				<div class="panel"><img src="img/4.jpg" alt="Image 4"/></div>
				<div class="panel"><img src="img/1.jpg" alt="Image 1"/></div>
				<div class="panel"><img src="img/2.jpg" alt="Image 2"/></div>
			</div>
			<header class="codrops-header">
                <div id="logo" style="display:none;">
                    <img src="img/logo.png" >
                </div>
	<div id="form_show" style="display:none">
		<table style="margin:0 auto;">
			<tr>
				<td><input type="text" placeholder="Username or Email" class="forminput"></td>
			</tr>
			<tr>
				<td><input type="password" placeholder="Password" class="forminput"></td>
			</tr>
			<tr>
				<td><input type="submit" class="button_login" value="Login"></td>
			</tr>
		</table>
	</div>
</div>
</div>
</body>
<script type="text/javascript">
	$(document).ready(function(){
		$('#logo').fadeIn(1000);			
			$('#logo').delay(300).animate({"margin-top":"140px"});
			$('#logo').animate({"margin-top":"160px"});
			$('#form_show').delay(1600).slideDown(300);
	});
</script>
 		</nav>
			</header>
    
</div><!-- /container -->
<script src="js/classie.js"></script>
<script src="js/boxesFx.js"></script>
<script>
    new BoxesFx( document.getElementById( 'boxgallery' ) );
</script>









</html>