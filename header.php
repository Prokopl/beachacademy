<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-176422121-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-176422121-1');
		</script>

		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<!-- bootstrap -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!-- 		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
		<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

		<!-- font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap&subset=latin-ext" rel="stylesheet">

		<!-- font awesome -->
		<script src="https://kit.fontawesome.com/70fca60f26.js" crossorigin="anonymous"></script>

		<!-- fancy apps -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
		<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
   		<meta http-equiv="Pragma" content="no-cache">
    	<meta http-equiv="Expires" content="0">

		<?php wp_head(); ?>
		
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon.png">
   		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-32x32.png">
    	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-16x16.png">
    	<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/img/icons/site.webmanifest">

		<script>
			// FIXING CHROME MOBILE BUG
			// First we get the viewport height and we multiple it by 1% to get a value for a vh unit
			let vh = window.innerHeight * 0.01;
			// Then we set the value in the --vh custom property to the root of the document
			document.documentElement.style.setProperty('--vh', `${vh}px`);

			// RELOAD PAGE AFTER CHANGING ORIENTATION
			window.onorientationchange = function() { window.location.reload(false); };
		</script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<nav id="topnavbar" class="navbar navbar-expand-lg navbar-light fixed-top" style="background: #F06222; color: white;">
				<button class="navbar-toggler mt-1 mb-1" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="margin: auto;">
				<span style="font-size: 1.9rem;"><i class="fas fa-bars" style="color:#fff;"></i> MENU</span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav">
						<li class="nav-item middle-link" id="menu-domu" style="background-color: #f6412d">
							<a class="nav-link" href="/">
								<img src="<?php echo get_template_directory_uri(); ?>/img/icons/homepage-icon.png">
								<div>DOMŮ</div>
							</a>
						</li>
						<li class="nav-item" id="menu-treninky" style="background-color: #ff9800"> <!-- ffc100 -->
							<a class="nav-link" href="/treninky">
								<img src="<?php echo get_template_directory_uri(); ?>/img/icons/training-icon.png">
								<div>TRÉNINKY</div>
							</a>
						</li>
						<li class="nav-item" id="menu-kempy" style="background-color: #ff9800">
							<a class="nav-link" href="/kempy">
								<img src="<?php echo get_template_directory_uri(); ?>/img/icons/camp-icon.png">
								<div>KEMPY</div>
							</a>
						</li>
						<li class="nav-item" id="menu-clenstvi" style="background-color: #ff9800">
							<a class="nav-link" href="/clenstvi-v-klubu-bavb/">
								<img src="<?php echo get_template_directory_uri(); ?>/img/icons/member-icon.png">
								<div>CHCI BÝT ČLEN</div>
							</a>
						</li>
						<li class="nav-item" id="menu-turnaje" style="background-color: #ff9800">
							<a class="nav-link" href="/turnaje">
								<img src="<?php echo get_template_directory_uri(); ?>/img/icons/tournament-icon.png">
								<div>TURNAJE</div>
							</a>
						</li>
						<li class="nav-item middle-link" id="menu-eshop" style="background-color: #f6412d">
							<a class="nav-link" href="https://eshop.beachacademy.cz">
								<img src="<?php echo get_template_directory_uri(); ?>/img/icons/eshop-icon.png">
								<div>E-SHOP</div>
							</a>
						</li>
					</ul>
				</div>
			</nav>
			
			<script>
				let urlpath = window.location.pathname;
				switch(urlpath) {
			      case "/":
				  case "":
					document.getElementById("menu-domu").classList.add("current-menu-item");
					break;
				  case "/treninky/":
					document.getElementById("menu-treninky").classList.add("current-menu-item");
					break;
				  case "/kempy/":
					document.getElementById("menu-kempy").classList.add("current-menu-item");
					break;
				  case "/clenstvi-v-klubu-bavb/":
					document.getElementById("menu-clenstvi").classList.add("current-menu-item");
					break;
				  case "/turnaje/":
					document.getElementById("menu-turnaje").classList.add("current-menu-item");
					break;
				}
			</script>

			
