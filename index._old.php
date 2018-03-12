<?php get_header();?>
 <?php if(is_front_page()): ?>
	<div class="container" id="main">
		<div class="row">
			<div class="col-md-8">
			<h2 class="titre_hp">Informations Ligue</h2>
				<div class="row">
					<div class="col-6">
						<?php $query = new WP_Query( 'cat=3&posts_per_page=1' ); ?>
						<?php if ( $query->have_posts() ) {
							while ( $query->have_posts() ) {
							$query->the_post();
							$do_not_duplicate = $post->ID;?>
							<h3><?php the_title();?></h3>
							<div><?php the_content();?></div>
						<?php } // end while
						} // end if
						?>
					</div>
					<div class="col-6">
						<?php $query = new WP_Query( 'cat=3&posts_per_page=4' ); ?>
						<?php if ( $query->have_posts() ) {
							while ( $query->have_posts() ) {
							$query->the_post(); 
						
						if ( $post->ID == $do_not_duplicate ) continue;?>
						<div class="container" style="border-bottom:1px dashed #c5c5c5;padding:5px 5px 5px 10px">
							<div class="row">
							<span style="font-size:18px;font-weight:bold;"><?php the_title();?></span>
							</div>
							<div class="row">
								<div class="col-md-8">
								<span style="font-size:12px">publié le <?php echo get_the_date('d M y');?></span>
								</div>
								<div class="col-md-4">
								<span style="font-size:10px;">lire la suite</span><i style="background-color:#000;color:#fff;display: inline-block;vertical-align: top;width: 20px;text-align: center;line-height: 20px;">+</i>
								</div>
							</div>
						</div>
						<?php } // end while
						} // end if
						?>
					</div>
				</div>
			
			</div>
			<div class="col-md-4">
				<h2>Prochains stages</h2>
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
					<?php
					global $wpdb;
					$sql = 'SELECT * FROM wp_stage_stage ORDER BY datestage DESC LIMIT 0,1'; 
					$sql2 = 'SELECT * FROM wp_stage_stage ORDER BY datestage DESC LIMIT 1,3'; 
					$result = $wpdb->get_results( $sql); 
					$result2 = $wpdb->get_results( $sql2); 
					foreach ($result as $v)
					{
						echo '<div class="carousel-item active"><a href="' . $v->url_img . '"><img class="d-block w-100" src=" ' . $v->url_img .' "/></a></div>';
					}
					foreach ($result2 as $v)
					{
						echo '<div class="carousel-item"><a href="' . $v->url_img . '"><img class="d-block w-100" src=" ' . $v->url_img .' "/></a></div>';
					}
					?>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					 </a>
				</div>
			</div>

		</div>
		<div class="row">
			<div class="col-md-6">
			<h2 class="titre_hp">Flandres Artois</h2>
				<?php $query = new WP_Query( 'cat=23&posts_per_page=10' ); ?>
					<?php if ( $query->have_posts() ) {
						while ( $query->have_posts() ) {
						$query->the_post();?>
					<div class="container">
						<div class="row">
							<div class="col-md-2" style="background-color:#333;color:#fff;margin-bottom:5px;line-height:25px;">
								<div style="text-align:center;"><?php echo get_the_date('j M');?></div>
								<div style="text-align:center"><?php echo get_the_date(Y);?></div>
							</div>
							<div class="col-md-10" style="padding:10px 0 5px 10px;"> <?php the_title();?></div>
							
					 	</div>
					</div>
					<?php } // end while
				} // end if
				?>
			</div>
			<div class="col-md-6">
			<h2 class="titre_hp">Picardie</h2>
				<?php $query = new WP_Query( 'cat=24&posts_per_page=10' ); ?>
					<?php if ( $query->have_posts() ) {
						while ( $query->have_posts() ) {
						$query->the_post();?>
					<div class="container">
						<div class="row">
							<div class="col-md-2" style="background-color:#333;color:#fff;margin-bottom:5px;line-height:20px;">
							<div style="text-align:center;"><?php echo get_the_date('j M');?></div>
							<div style="text-align:center"><?php echo get_the_date(Y);?></div>
							</div>
							<div class="col-md-10" style="padding:10px 0 5px 10px;"> <?php the_title();?></div>
					 	</div>
					</div>
					<?php } // end while
				} // end if
				?>
			</div>

		</div>
		<div class="row" style="margin-top:20px;">
			<div class="col-md-12">
			Informations Fédé
			<?php $query = new WP_Query( 'cat=6&posts_per_page=4' ); ?>
					<?php if ( $query->have_posts() ) {
						while ( $query->have_posts() ) {
						$query->the_post();?>
					<span><?php the_title();?></span></br>
					<?php } // end while
				} // end if
				?>
			</div>
			

		</div>
	</div>
	
 <?php endif; ?>

<?php get_footer();?>
