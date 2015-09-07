<?php
session_start();
 
//$logged_in = false;
 
//jika session username belum dibuat, atau session username kosong
if (isset($_SESSION['username']) || !empty($_SESSION['username'])) {
    $logged_in = true;
}
 
include_once('config.php');

if($_POST["submit"]){
	$username = $_POST["username"];
	$password = $_POST["password"];
	
	$res=mysql_query("select * from member where username='".$username."' AND password='".$password."'");
	if($row=mysqli_fetch_array($res)){
		$logged_in = true;
	}
	else{
	
	}
}
?>
<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>MoneyMonth</title>
		<meta name="description" content="Four Boxes Slideshow: Recreating the background image slideshow seen on Atelier Serge Thoroval's website" />
		<meta name="keywords" content="background slideshow, boxes, background image, four panels, css, tutorial" />
		<meta name="author" content="codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link href='http://fonts.googleapis.com/css?family=Raleway:200,400,600' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo-login.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.3.0/css/font-awesome.min.css" />
        <link rel="stylesheet" type="text/css" href="css/demo-home.css" />
        <link rel="stylesheet" type="text/css" href="css/card.css" />
        <link rel="stylesheet" type="text/css" href="css/pattern.css" />
        <!--[if IE]>
          <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script>
        if (navigator.userAgent.toLowerCase().indexOf('firefox') > -1) {
            var root = document.getElementsByTagName('html')[0];
            root.setAttribute('class', 'ff');
        };
        </script>
    
<style>
	body{ background:url('background.png'); font-family: 'Arial'}
	#logo{width: 644px; height:auto; margin:0 auto; margin-top:210px; }
	#form_show_login{width: 644px; margin: 0 auto; margin-top: 30px;}
	#form_show_login .forminput{ padding:10px 20px; border:none; font-size: 1.4em; width: 500px; margin: 5px; outline-color: #58ACFA; font-family: 'Open Sans Light'}
	.button_login{ background: #58ACFA; color:white; padding:10px 20px; border:none; font-size: 1.4em; width: 500px; margin: 0px; outline: none; border-bottom: 5px solid #58ACFA; border-radius:5px; font-family: 'Open Sans Light'; }
	.button_login:hover{ border-bottom:2px solid #2E64FE; margin-top: 3px; cursor: pointer; }
</style>
    
    
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
</head>

<body>
    <? if($logged_in == false){ ?>
<div class="login-body">
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
	<div id="form_show_login" style="display:none">
        <form method="post" action="auth.php">
            <table style="margin:0 auto;">
                <tr>
                    <td><input type="text" placeholder="Username or Email" class="forminput" name="username"></td>
                </tr>
                <tr>
                    <td><input type="password" placeholder="Password" class="forminput" name="password"></td>
                </tr>
                <tr>
                    <td><input type="submit" class="button_login" value="Login"></td>
                </tr>
            </table>
        </form>
        
	</div>
</div>
</div> <!--CLOSE LOGIN BODY CONTAINER-->
    
    
			</header>
		<script src="js/classie.js"></script>
		<script src="js/boxesFx.js"></script>
		<script>
			new BoxesFx( document.getElementById( 'boxgallery' ) );
		</script>
    
<script type="text/javascript">
    $(document).ready(function(){
        $('#logo').fadeIn(1000);			
            $('#logo').delay(300).animate({"margin-top":"140px"});
            $('#logo').animate({"margin-top":"160px"});
            $('#form_show_login').delay(1600).slideDown(300);
    });
</script>
        <? } else{ ?> 
<div class="demo-1">
	<div class="container">
		<header class="codrops-header">
		      <img src="img/logo.png" >
		</header>
		<div class="content">
			<!-- trianglify pattern container -->
			<div class="pattern pattern--hidden"></div>
			<!-- cards -->
			<div class="wrapper">
				
				<div class="card">
					<div class="card__container card__container--closed">
						<svg class="card__image" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 500" preserveAspectRatio="xMidYMid slice">
							<defs>
								<clipPath id="clipPath4">
									<!-- r = 992 = hyp = Math.sqrt(960*960+250*250) -->
									<circle class="clip" cx="960" cy="250" r="992"></circle>
								</clipPath>
							</defs>
							<image clip-path="url(#clipPath4)" width="1920" height="500" xlink:href="img/d.jpg"></image>
						</svg>
						<div class="card__content">
							<i class="card__btn-close fa fa-times"></i>
							<div class="card__caption">
								<h2 class="card__title">Your Account</h2>
								<p class="card__subtitle">See your credit here</p>
							</div>
							<div class="card__copy">
								<div class="meta">
									<img class="meta__avatar" src="img/authors/4.png" alt="author04" />
									<span class="meta__author">Lena Bestofos</span>
									<span class="meta__date">06/14/2015</span>
								</div>
								<p>Business model canvas bootstrapping deployment startup. In A/B testing pivot niche market alpha conversion startup down monetization partnership business-to-consumer success for investor mass market business-to-business.</p>
								<p>Release creative social proof influencer iPad crowdsource gamification learning curve network effects monetization. Gamification business plan mass market www.discoverartisans.com direct mailing ecosystem seed round sales long tail vesting period.</p>
								<p>Product management ramen bootstrapping seed round venture holy grail technology backing partner network entrepreneur beta marketing value proposition. Android stealth conversion scrum project network effects. Creative alpha long tail conversion stealth growth hacking iteration investor A/B testing prototype customer. Startup www.discoverartisans.com direct mailing launch party partnership market ramen metrics focus value proposition.</p>
								<p>Stock infrastructure seed round sales paradigm shift technology user experience focus gamification. Partnership metrics business plan stealth business-to-business. Deployment graphical user interface monetization. Twitter incubator scrum project entrepreneur branding burn rate ramen backing paradigm shift virality crowdsource.</p>
								<p>Social proof MVP ecosystem. Ramen launch party pitch deployment stealth. Vesting period MVP equity. Focus creative partnership founders iteration agile development infographic.</p>
								<p>Low hanging fruit burn rate innovator user experience niche market A/B testing creative launch party product management release. Www.discoverartisans.com influencer business model canvas user experience gamification paradigm shift startup research &amp; development iPad agile development. Strategy incubator infographic success marketing buzz A/B testing responsive web design. Traction research &amp; development pitch seed money venture niche market accelerator network effects.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card__container card__container--closed">
						<svg class="card__image" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 500" preserveAspectRatio="xMidYMid slice">
							<defs>
								<clipPath id="clipPath5">
									<!-- r = 992 = hyp = Math.sqrt(960*960+250*250) -->
									<circle class="clip" cx="960" cy="250" r="992"></circle>
								</clipPath>
							</defs>
							<image clip-path="url(#clipPath5)" width="1920" height="500" xlink:href="img/e.jpg"></image>
						</svg>
						<div class="card__content">
							<i class="card__btn-close fa fa-times"></i>
							<div class="card__caption">
								<h2 class="card__title">Payment</h2>
								<p class="card__subtitle">Add or delete payment</p>
							</div>
							<div class="card__copy">
								<div class="meta">
									<img class="meta__avatar" src="img/authors/5.png" alt="author05" />
									<span class="meta__author">Michaela Walters</span>
									<span class="meta__date">06/11/2015</span>
								</div>
								<p>Business model canvas bootstrapping deployment startup. In A/B testing pivot niche market alpha conversion startup down monetization partnership business-to-consumer success for investor mass market business-to-business.</p>
								<p>Release creative social proof influencer iPad crowdsource gamification learning curve network effects monetization. Gamification business plan mass market www.discoverartisans.com direct mailing ecosystem seed round sales long tail vesting period.</p>
								<p>Product management ramen bootstrapping seed round venture holy grail technology backing partner network entrepreneur beta marketing value proposition. Android stealth conversion scrum project network effects. Creative alpha long tail conversion stealth growth hacking iteration investor A/B testing prototype customer. Startup www.discoverartisans.com direct mailing launch party partnership market ramen metrics focus value proposition.</p>
								<p>Stock infrastructure seed round sales paradigm shift technology user experience focus gamification. Partnership metrics business plan stealth business-to-business. Deployment graphical user interface monetization. Twitter incubator scrum project entrepreneur branding burn rate ramen backing paradigm shift virality crowdsource.</p>
								<p>Social proof MVP ecosystem. Ramen launch party pitch deployment stealth. Vesting period MVP equity. Focus creative partnership founders iteration agile development infographic.</p>
								<p>Low hanging fruit burn rate innovator user experience niche market A/B testing creative launch party product management release. Www.discoverartisans.com influencer business model canvas user experience gamification paradigm shift startup research &amp; development iPad agile development. Strategy incubator infographic success marketing buzz A/B testing responsive web design. Traction research &amp; development pitch seed money venture niche market accelerator network effects.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card__container card__container--closed">
						<svg class="card__image" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 500" preserveAspectRatio="xMidYMid slice">
							<defs>
								<clipPath id="clipPath6">
									<!-- r = 992 = hyp = Math.sqrt(960*960+250*250) -->
									<circle class="clip" cx="960" cy="250" r="992"></circle>
								</clipPath>
							</defs>
							<image clip-path="url(#clipPath6)" width="1920" height="500" xlink:href="img/f.jpg"></image>
						</svg>
						<div class="card__content">
							<i class="card__btn-close fa fa-times"></i>
							<div class="card__caption">
								<h2 class="card__title">Money Tracking</h2>
								<p class="card__subtitle">Track your payment here</p>
							</div>
							<div class="card__copy">
								<div class="meta">
									<img class="meta__avatar" src="img/authors/6.png" alt="author06" />
									<span class="meta__author">Tom Goldman</span>
									<span class="meta__date">06/10/2015</span>
								</div>
								<p>Business model canvas bootstrapping deployment startup. In A/B testing pivot niche market alpha conversion startup down monetization partnership business-to-consumer success for investor mass market business-to-business.</p>
								<p>Release creative social proof influencer iPad crowdsource gamification learning curve network effects monetization. Gamification business plan mass market www.discoverartisans.com direct mailing ecosystem seed round sales long tail vesting period.</p>
								<p>Product management ramen bootstrapping seed round venture holy grail technology backing partner network entrepreneur beta marketing value proposition. Android stealth conversion scrum project network effects. Creative alpha long tail conversion stealth growth hacking iteration investor A/B testing prototype customer. Startup www.discoverartisans.com direct mailing launch party partnership market ramen metrics focus value proposition.</p>
								<p>Stock infrastructure seed round sales paradigm shift technology user experience focus gamification. Partnership metrics business plan stealth business-to-business. Deployment graphical user interface monetization. Twitter incubator scrum project entrepreneur branding burn rate ramen backing paradigm shift virality crowdsource.</p>
								<p>Social proof MVP ecosystem. Ramen launch party pitch deployment stealth. Vesting period MVP equity. Focus creative partnership founders iteration agile development infographic.</p>
								<p>Low hanging fruit burn rate innovator user experience niche market A/B testing creative launch party product management release. Www.discoverartisans.com influencer business model canvas user experience gamification paradigm shift startup research &amp; development iPad agile development. Strategy incubator infographic success marketing buzz A/B testing responsive web design. Traction research &amp; development pitch seed money venture niche market accelerator network effects.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /cards -->
		</div><!-- /content -->
		<!-- Related demos -->
		<section class="content content--related">
			<p>Log Out</p>
           <!-- <div id="form_show" style="display:none">-->
	</div>
		</section>
	</div>
	<!-- /container -->
	<!-- JS -->
	<script src="js/vendors/trianglify.min.js"></script>
	<script src="js/vendors/TweenMax.min.js"></script>
	<script src="js/vendors/ScrollToPlugin.min.js"></script>
	<script src="js/vendors/cash.min.js"></script>
	<script src="js/Card-circle.js"></script>
	<script src="js/demo.js"></script>
</div> 
        <? } ?>
</body>
</html>