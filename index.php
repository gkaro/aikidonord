<?php get_header();?>
 <?php if(is_front_page()): ?>
	<div class="container-" id="main">
		<!--<div><img src="http://www.aikidonord.com/ligue/wp-content/themes/ligue-aikidonord/18-19xi17-78.jpg"></div>-->
		<div class="row">
			<div class="col-1">
			</div>
			<div class="col-1" style="border:1px solid #c5c5c5; padding:2px;background-size:cover;background-image:url(http://www.aikidonord.com/ligue/wp-content/themes/ligue-aikidonord/sidebar.jpg); background-repeat:no-repeat;height:900px">
			</div>
		
			<div class="col-4">
				<div style="width:80%;margin:0 auto;">
				<h2 class="actus_stages">Prochains stages</h2>
				<?php
					global $wpdb;
					$today = date('Y-m-d');
					$sql = 'SELECT * FROM wp_stage_stage, wp_stage_salle, wp_stage_animateurxstage, wp_stage_animateur 
							WHERE wp_stage_stage.idsalle = wp_stage_salle.id 
							AND wp_stage_animateurxstage.idstage = wp_stage_stage.id
							AND wp_stage_animateur.id = wp_stage_animateurxstage.idanimateur
							ORDER BY datestage ASC'; 
					$result = $wpdb->get_results( $sql); 
					$i = 0;
					foreach ($result as $v) 
					{
						if($today < $v->datestage){
						date_default_timezone_set('Europe/Paris');
						setlocale(LC_TIME, 'fr', 'fr_FR', 'fr_FR.ISO8859-1');
						$time = strtotime($v->datestage);
						$day = strftime('%A',$time);
						$num = strftime('%d',$time);
						$month = strftime('%b',$time);
						$year = date('Y',$time);
						
						echo '<div class="container">
						<div class="row">
							<div class="col-md-3" style="background-color:#333;color:#fff;margin-bottom:5px;line-height:25px;height:142px;font-family: \'Oswald\', sans-serif">
								<div style="text-align:center;margin-top:30px"> ' . $day . '<br> ' .$num . ' ' . $month . '</div>
								<div style="text-align:center"> ' . $year . '</div>
							</div>
							<div class="col-md-3"><a href=" ' .$v->url_img . ' "/><img src=" ' . $v->url_img . '" width="100"></a></div>
							<div class="col-md-6"><span style="font-weight:bold;font-size:20px;"> '. $v->type . '</span><br>
							<span>&agrave; ' . $v->ville . '</span><br>
							<span>anim&eacute; par ' . $v->nom. '</span><br>
							<span style="background-color:#445FA6;color:#fff;padding:2px;font-size:10px">Flandres-Artois</span>
							</div>
							
						</div>
					
					</div>';
						if (++$i == 5) break;
						}
						
					}
					²
					?>
			</div>
			</div>
			
			<div class="col-4">
				<h2 class="actus">Actualit&eacute;s</h2>
				<?php $query = new WP_Query( 'cat=3&posts_per_page=4' ); ?>
				<?php if ( $query->have_posts() ) {
					while ( $query->have_posts() ) {
					$query->the_post();?>
					<div class="container" style="border-bottom:5px dotted #D5D5D5; margin-bottom:7px;">
						<div class="row post">
							<div class="col-2">
								<?php the_post_thumbnail(array(75, 75), array('class'=>'thumbnail-news')); ?>
							</div>
							<div class="col">
								<h4><a href="<?php the_permalink();?>"><?php the_title();?></a> <small class="date"><?php echo get_the_date();?></small></h4>
								<div><?php the_content('lire la suite');?></div>
							</div>
						</div>
					</div>
				<?php } // end while
				} // end if
				?>
			</div>
			<div class="col-1" style="border:1px solid #c5c5c5; padding:2px;background-size:cover;background-image:url(http://www.aikidonord.com/ligue/wp-content/themes/ligue-aikidonord/sidebar2.jpg); background-repeat:no-repeat;height:900px">
			</div>
			<div class="col-1">
			</div>
		</div>
	</div>
	<div style="background-color:#F8f8f8;padding:2% 0;">
		<div class="container">
			<div class="row" style="margin-top:20px;">
				
				<div class="col-md-4">
					<h2 style="text-align:center;border-bottom:1px solid #333"><i style="margin-right:2%" class="fa fa-camera" aria-hidden="true"></i>Galeries Photos</h2>
					<?php $query = new WP_Query( 'cat=8&posts_per_page=4' ); ?>
						<?php if ( $query->have_posts() ) {
							while ( $query->have_posts() ) {
							$query->the_post(); 
						?>
						<div class="container" style="border-bottom:2.5px dotted #D5D5D5; margin-bottom:7px;">
							<div class="row post">
								<div class="col-3">
									<?php the_post_thumbnail(array(75, 75), array('class'=>'thumbnail-news')); ?>
								</div>
								<div class="col-9">
									<h4><a href="<?php the_permalink();?>"><?php the_title();?></a> <small class="date"><?php echo get_the_date();?></small></h4>
									
								</div>
							</div>
						</div>
						<?php } // end while
					} // end if
					?>
					<div class="button"><a href="./category/photos/photos-des-stages/">Voir toutes les galeries photos</a></div>
				</div>
				<div class="col-md-4">
					<h2 style="text-align:center;border-bottom:1px solid #333">Informations F&eacute;d&eacute;rales</h2>
					<?php $query = new WP_Query( 'cat=6&posts_per_page=4' ); ?>
						<?php if ( $query->have_posts() ) {
							while ( $query->have_posts() ) {
							$query->the_post();?>
						<div class="container" style="border-bottom:2.5px dotted #D5D5D5; margin-bottom:7px;">
							<h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
						</div>
						<?php } // end while
					} // end if
					?>
				</div>
				<div class="col-md-4" style="text-align:center;">
					<h2 style="text-align:center;border-bottom:1px solid #333">Archives</h2>
				<?php wp_get_archives( array( 'type' => 'monthly', 'limit' => 12,'format'=>'custom','before'=>'<div>','after'=>'</div>' ) ); ?>
				</div>

			</div>
		</div>
	</div>
	
	<?php else: ?>
	<div class="container" id="article">
		<div class="row">
			<div class="col-10">
				<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>    
				<h2 style="margin:5% 0"><?php the_title();?></h2>
				<?php the_content();?>
				<?php endwhile; ?>
				<?php endif; ?>
			</div>
			<div class="col-2" style="background-color:#F5F5F5">
				<div style="border:1px solid #c5c5c5; padding:2px;background-size:cover;background-image:url(http://www.aikidonord.com/ligue/wp-content/themes/ligue-aikidonord/sidebar2.jpg); background-repeat:no-repeat;height:900px">
				</div>
			</div>
		</div>
	</div>
	<?php endif; ?>

	<footer style="background-color:#444;height:150px;color:#fff;text-align:center">
		<div class="container" id="footer">
			<div class="row">
				<div class="col-4">
				mentions l&eacute;gales
				</div>
				<div class="col-4">
				contact
				</div>
				<div class="col-4">
				ffab
				
				</div>
			</div>
		</div>
	
	</footer>
