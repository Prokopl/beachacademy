<?php get_header(); ?>

			<div id="mycarousel" class="carousel slide carousel-fade" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/slider/01.jpg);">
					<img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/img/slider/01.jpg">
					</div>
					<div class="carousel-item" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/slider/02.jpg);">
					<img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/img/slider/02.jpg">
					</div>
					<div class="carousel-item" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/slider/03.jpg);">
					<img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/img/slider/03.jpg">
					</div>
				</div>
				<div id="logo">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png">
				</div>
				<div id="socialmedia">
					<a href="https://www.facebook.com/beachacademybrno/"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/facebook.png"></a>
					<a href="https://www.instagram.com/beachacademy/"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/instagram.png"></a>
					<a href="https://www.youtube.com/channel/UCWDQXI_E0HogceVINuoFAcA"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/youtube.png"></a>
				</div>
				<div id="contactus">
					<a href="#contact" class="btn btn-light btn-lg" role="button" aria-pressed="true">KONTAKTUJTE NÁS</a>
				</div>
			</div>
			
			<div id="about" class="main-section">
				<div class="title-box">
					<span class="title">KDO JSME</span>
				</div>
				<p><b>BEACH ACADEMY VIKTORIA BRNO</b> je beachvolejbalový klub, který se nachází v&nbsp;Brně a&nbsp;je zaregistrovaný pod Českým volejbalovým svazem (ČVS). V&nbsp;našem klubu může trénovat kdokoliv, kdo má o&nbsp;beachvolejbal zájem, a&nbsp;to pod vedením zkušených trenérů s&nbsp;dlouholetou praxí. Nabízíme široký výběr skupin všech výkonnostních a&nbsp;věkových kategorií. Kromě toho během roku pořádáme turnaje pro všechny věkové skupiny, a&nbsp;to turnaje jak pro začátečníky, tak i&nbsp;pro profesionální hráče pod záštitou ČVS.</p>
			</div>

			<div id="news" class="main-section">
				<div class="title-box">
					<span class="title">CO JE U NÁS NOVÉHO</span>
				</div>
				<div class="cards">
					<?php $query = new WP_Query( 'category_name=novinky&order=desc&posts_per_page=4' ); ?>
					<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
						<div class="card">
							<img src="<?php the_post_thumbnail_url() ?>"  class="card-img-top img-same-height">
							<div class="card-body">
								<h5 class="card-title"><?php the_title(); ?></h5>
							</div>
							<a href="<?php echo get_permalink() ?>" class="btn btn-dark">Zobrazit novinku</a>
						</div>
					<?php endwhile; 
					else : ?>
					<p><?php esc_html_e( '' ); ?></p>
					<?php endif; ?>
				</div>
				<!-- <div class="cards">
					<div class="card">
						<img src="https://picsum.photos/250/150" class="card-img-top">
						<div class="card-body">
							<h5 class="card-title">Nábor nových členů jaro 2019</h5>
						</div>
						<a href="#" class="btn btn-dark">Zobrazit novinku</a>
					</div>
					<div class="card">
						<img src="https://picsum.photos/250/150" class="card-img-top">
						<div class="card-body">
							<h5 class="card-title">Nábor nových členů jaro 2019</h5>
						</div>
						<a href="#" class="btn btn-dark">Zobrazit novinku</a>
					</div>
					<div class="card">
						<img src="https://picsum.photos/250/150" class="card-img-top">
						<div class="card-body">
							<h5 class="card-title">Nábor nových členů jaro 2019</h5>
						</div>
						<a href="#" class="btn btn-dark">Zobrazit novinku</a>
					</div>
					<div class="card">
						<img src="https://picsum.photos/250/150" class="card-img-top">
						<div class="card-body">
							<h5 class="card-title">Nábor nových členů jaro 2019</h5>
						</div>
						<a href="#" class="btn btn-dark">Zobrazit novinku</a>
					</div>
				</div> -->
			</div>

			<div id="instafeed" class="main-section">
				<span class="title">Z INSTAGRAMU</span>
				<div id="instawidget">
					<!-- LightWidget WIDGET -->
					<script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script>
					<iframe src="//lightwidget.com/widgets/3aa6a5a84b1e5137ac9716a5ec9bf8b2.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>
				</div>
			</div>

			<div id="team" class="main-section">
				<div class="title-box">
					<span class="title">TRENÉŘI</span>
				</div>
				<div id="trainers">
					<?php $query = new WP_Query( 'category_name=treneri&order=asc' ); ?>
					<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
						<a data-fancybox data-src="#trainerinfo<?php the_id(); ?>" data-modal="true" href="javascript:;" style="color: #212529;">
							<div class="trainer">
								<img src="<?php the_post_thumbnail_url() ?>">
								<p><?php the_title(); ?></p>
							</div>
						</a>
						<div id="trainerinfo<?php the_id(); ?>" class="p-4 text-center margin-auto" style="display: none;max-width:500px;">
							<h3><?php the_title(); ?></h3>
							<?php the_content(); ?>
							<p>
								<button data-fancybox-close class="btn btn-dark w-100">Zavřít</button>
							</p>
						</div>
					<?php endwhile; 
					// wp_reset_postdata();
					else : ?>
					<p><?php esc_html_e( '' ); ?></p>
					<?php endif; ?>
				</div>
			</div>

			<div id="contact" class="main-section">
				<div class="title-box">
					<span class="title">KONTAKT</span>
				</div>
				<?php 
					$id=35; 
					$post = get_post($id); 
					$content = apply_filters('the_content', $post->post_content); 
					echo $content;  
				?>
			</div>

			<div id="map" class="main-section">
				<div class="title-box">
					<span class="title">KDE NÁS NAJDETE</span>
				</div>
				<div class="mapouter">
					<iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=CENTRUM%20VIKTORIA&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
				</div>
			</div>

			<div id="partners" class="main-section">
				<div class="title-box">
					<span class="title">PARTNEŘI</span>
				</div>
				<div class="row">
					<?php echo do_shortcode('[sponsors image_size=full]'); ?>
				</div>
			</div>


<?php get_footer(); ?>
