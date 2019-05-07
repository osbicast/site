<?php

if ( 'posts' == get_option( 'show_on_front' ) ) {
    include( get_home_template() );
}
else {
    if ( ! is_page_template() ) {
        get_header();

        get_template_part( 'template-parts/front-page/cover' );
        get_template_part( 'template-parts/front-page/services' );

        ?>

        <?php if ( get_theme_mod( 'show_main_content', 1 ) ) : ?>
        <section class="wp-bp-main-content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <?php while ( have_posts() ) : the_post(); ?>
                            <h2 class="text-center mb-4"><?php the_title(); ?></h2>
                            <?php wp_bootstrap_4_post_thumbnail(); ?>
                            <?php the_content(); ?>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </section>
        <?php endif; ?>

		<div class="bg-white mt-4 text-muted" style="margin-top: 0 !important; padding-top: 3rem;padding-bottom: 3rem;">
			<div class="container">
				<div class="row">
					<div id="about_section" class="col-xs-12 col-md-6">
						<div class="container text-center">
							<h3>Sobre</h3>
							<p class="lead">
								OSBI Cast é um podcast de difusão de conhecimento e de divulgação da comunidade de <i>Business Intelligence</i> de Código Aberto. Composto pelo quadro <i>interview</i>  com episódios mensais sempre com alguma personalidade da comunidade de BI.
							</p>
						</div>
						<br><br><br>
						<div class="container text-center">
							<h3>Podcasts que nos inspiram</h3>
							<div class="row">
								<div class="col-xs-6 col-md-4 p-2">
									<a href="https://hipsters.tech/" target="no_blank">
										<div style="margin-right: 10px; filter: grayscale(100%);">
											<img src="https://hipsters.tech/wp-content/uploads/2017/01/logo-hipsters-pontotech.svg" class="img-thumbnail" style="height: 60px;" alt="Hipsters.Tech">
										</div>
									</a>
								</div>

								<div class="col-xs-6 col-md-4 p-2">
									<a href="https://pizzadedados.com/" target="no_blank">
										<div style="margin-right: 10px; filter: grayscale(100%);">
											<img src="https://pizzadedados.com/assets/img/signo.png" class="img-thumbnail" style="height: 60px;" alt="Pizza de Dados">
										</div>
									</a>
								</div>

								<div class="col-xs-6 col-md-4 p-2">
									<a href="https://devnaestrada.com.br/" target="no_blank">
										<div style="margin-right: 10px; filter: grayscale(100%);">
											<img src="https://devnaestrada.com.br/assets/img/logo-dne.svg" class="img-thumbnail" style="height: 60px;" alt="DevNaEstrada">
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div id="contact_section" class="col-xs-12 col-md-6">
						<div class="container">
							<h3>Contato</h3>
							<p class="lead">
								<?php echo do_shortcode( '[contact-form-7 id="139" title="Contato"]' ); ?>
							</p>
						</div>
					</div>
				</div> <!-- row -->
			</div> <!-- container -->
	</div>

        <?php
        get_footer();
    }
    else {
        include( get_page_template() );
    }
}
?>
