<!doctype html>
<html lang="fr-FR">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
		<link rel="alternate" type="application/rss+xml" title="Ligue Flandres-Artois &raquo; Flux" href="http://aikidonord.com/ligue/feed/" />
		<link rel='stylesheet' href='/ligue/wp-content/themes/<?php echo get_template();?>/style.css' type='text/css' media='all' />
		<script type='text/javascript' src='http://aikidonord.com/ligue/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
		<script type='text/javascript' src='http://aikidonord.com/ligue/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
		<link rel="stylesheet" href="/ligue/wp-content/themes/<?php echo get_template();?>/font-awesome/css/font-awesome.min.css">
		
		<link href="https://fonts.googleapis.com/css?family=Acme|Krona+One|Oswald|Saira+Condensed|Shadows+Into+Light" rel="stylesheet">
		<?php wp_head(); ?>
	</head>
	<body>
		<header>
			<div id="banner">
				<div style="text-align:center"><h1>AIKIDONORD - site de la Ligue Nord-Pas de Calais-Picardie</h1></div>
			</div>
			<div class="box" style=" background-color:#851D24;border-top: 1px solid rgba(0,0,0,.05);margin-bottom: 0px;height:50px">
				<div class="container" id="header">

					<div class="row" >
						<div class="col-md-12" id="menu-container">
							<nav id="site-navigation" class="main-navigation" role="navigation">
							<?php wp_nav_menu(
										array(
											'theme_location' => 'primary',
											'menu_id'        => 'primary-menu',
											'menu_class'        => 'primary-menu',
											'container'     => 'div',
											'container_class'   => 'primary-menu-container',     
										)
									);
							?>
							</nav><!-- #site-navigation -->
							
						</div>
					</div>
				</div>
			</div>
		</header>