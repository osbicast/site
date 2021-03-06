<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_4
 */

?>

	</div><!-- #content -->	

	<footer id="colophon" class="site-footer text-center bg-white text-muted">
		
		<hr>
		<div class="container p-3">
			<div class="d-block text-center">
				<img src="https://osbicast.com/wp-content/uploads/2019/04/logo_osbicast_grey.png"style="height: 80px;">
				<a class="d-block text-center" href="<?php echo esc_url( 'osbicast.com' ); ?>"><?php echo date("Y")?> © OSBI Cast - O podcast da comunidade de BI open source</a>
			</div><!-- .site-info -->
		</div>
		<!-- /.container -->
		
		<section class="footer-widgets text-left">
			<div class="container">
				<div class="row">
						<div class="col-xs-12 col-md-3">
							<h5>Últimos episódios</h5>
							<ul>
								<?php $the_query = new WP_Query( 'posts_per_page=3' ); ?>
								<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
								<li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
								<?php 
								endwhile;
								wp_reset_postdata();
								?>
							</ul>
						</div>
					
						<div class="col-xs-12 col-md-9">
							<div class="row">
								
								<div class="col-xs-12 col-md-4">
									<h5>Host</h5>
									<a href="https://twitter.com/fernandommota" target="no_blank">
										<div>
											<div class="d-inline float-left" style="margin-right: 10px; filter: grayscale(100%);">
												<img src="https://osbicast.com/wp-content/uploads/2019/03/PERFIL_LATTES.jpg" class="img-thumbnail" style="height: 60px;" alt="Host Fernando Maia">
											</div>
											<div class="d-inline float-left">
												<span class="d-block">Fernando Maia da Mota</span>
												<small class="d-block">BI Analyst and Pentaho Specialist</small>
												<small class="d-block">@fernandommota</small>
											</div>
										</div>
									</a>
								</div>

								<div class="col-xs-12 col-md-4">
									<h5>Host</h5>
									<a href="https://geekbi.wordpress.com" target="no_blank">
										<div>
											<div class="d-inline float-left" style="margin-right: 10px; filter: grayscale(100%);">
												<img src="https://osbicast.com/wp-content/uploads/2019/04/fabiodesalles.png" class="img-thumbnail" style="height: 60px;" alt="Host Fernando Maia">
											</div>
											<div class="d-inline float-left">
												<span class="d-block">Fábio de Salles</span>
												<small class="d-block">Serpro Analyst and BI/Pentaho Specialist</small>
												<small class="d-block">https://geekbi.wordpress.com</small>
											</div>
										</div>
									</a>
								</div>

								<div class="col-xs-12 col-md-4">
									<h5>Vitrine</h5>
									<a href="https://www.instagram.com/designerflaviaborato/" target="no_blank">
										<div>
											<div class="d-inline float-left" style="margin-right: 10px; filter: grayscale(100%);">
												<img src="https://instagram.fcgr1-1.fna.fbcdn.net/vp/1e4a54a9b159f47621b96932f7281831/5D331B68/t51.2885-19/s150x150/54447253_155373825396496_7617288812019843072_n.jpg?_nc_ht=instagram.fcgr1-1.fna.fbcdn.net" class="img-thumbnail" style="height: 60px;" alt="Host Fernando Maia">
											</div>
											<div class="d-inline float-left">
												<span class="d-block">Flávia Borato</span>
												<small class="d-block">Designer Gráfico</small>
												<small class="d-block">@designerflaviaborato</small>
											</div>
										</div>
									</a>
								</div>
								
							</div>
							<!-- /.row -->
						</div><!-- /.col members -->
					
						
					
				</div>
				
				<!-- /.row -->
			</div>
		</section>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
