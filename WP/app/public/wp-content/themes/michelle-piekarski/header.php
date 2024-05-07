<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php michelle_piekarski_schema_type(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">

		<?php wp_head(); ?>

		<!-- Facebook Card data -->
		<meta property="og:title" content="Dra. Michelle Piekarski | Dermatologista | Santo André">
		<meta property="og:site_name" content="Dra. Michelle Piekarski">
		<meta property="og:url" content="https://dramichellepiekarski.com.br/">
		<meta property="og:type" content="doctor">
		<meta property="og:description" content="Cuide de sua pele, cabelos e unhas! Atendemos crianças, adultos e idosos, presencial - Santo Andre, ABC e Online - Brasil e exterior. Agende sua consulta agora!">
		<meta property="og:image" content="https://dev.joekyy.com.br/michelle-piekarski/assets/images/img-social.png">

		<!-- Twitter Card data -->
		<meta name="twitter:card" content="summary_large_image"/>
		<meta name="twitter:image" content="https://dev.joekyy.com.br/michelle-piekarski/assets/images/img-social.png">
		<meta name="twitter:site" content="https://dramichellepiekarski.com.br/">
		<meta name="twitter:title" content="Dra. Michelle Piekarski">
		<meta name="twitter:description" content="Cuide de sua pele, cabelos e unhas! Atendemos crianças, adultos e idosos, presencial - Santo Andre, ABC e Online - Brasil e exterior. Agende sua consulta agora!">

		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/apple-icon-57x57.png" />
		<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/apple-icon-60x60.png" />
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/apple-icon-72x72.png" />
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/apple-icon-76x76.png" />
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/apple-icon-114x114.png" />
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/apple-icon-120x120.png" />
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/apple-icon-144x144.png" />
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/apple-icon-152x152.png" />
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/apple-icon-180x180.png" />
		<link rel="icon" type="image/png" sizes="192x192" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/android-icon-192x192.png" />
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/favicon-32x32.png" />
		<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/favicon-96x96.png" />
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/favicon-16x16.png" />
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/apple-icon-144x144.png" />
		<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/manifest.json" />
		<meta name="theme-color" content="#ffffff" />
		<meta name="msapplication-TileColor" content="#ffffff" />
		<link rel="preconnect" href="https://fonts.gstatic.com">
    	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" rel="stylesheet" type="text/css" />
		<link href="https://cdn.jsdelivr.net/npm/hamburgers@1.1.3/dist/hamburgers.css" rel="stylesheet" />

		<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet" type="text/css" />
    </head>
    <body <?php body_class(); ?>>
        <?php wp_body_open(); ?>
        <header>
			<div class="container">
				<div class="row align-items-center">
					<div class="col-9 col-xl-1 text-center">
						<?php if (is_front_page() || is_home() || is_front_page() && is_home()) : ?>
							<h1 class="logo">
								<a href="<?php echo esc_url(home_url('/')); ?>"
									title="<?php echo esc_html(get_bloginfo('name')); ?>" rel="home">
									<?php echo esc_html(get_bloginfo('name')); ?>
								</a>
							</h1>
						<?php else: ?>
							<h6 class="logo">
								<a href="<?php echo esc_url(home_url('/')); ?>"
									title="<?php echo esc_html(get_bloginfo('name')); ?>" rel="home">
									<?php echo esc_html(get_bloginfo('name')); ?>
								</a>
							</h6>
						<?php endif; ?>
					</div>
					<div class="col-3 col-xl-11">
						<div class="menu">
							<button class="nav-button hamburger hamburger--squeeze" type="button">
								<span class="hamburger-box">
									<span class="hamburger-inner"></span>
								</span>
							</button>
							<nav>
								<?php
									wp_nav_menu(
										array(
											'theme_location' =>
												'main-menu',
											'container' => 'ul',
											'depth' => 2
										)
									);
									
									if (has_nav_menu('main-menu')) {
										echo '<ul class="extra-menu-item">
												<li>
													<a href="#" class="btn btn-primary">Agende sua consulta</a>
												</li>
											  </ul>';
									}
								?>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</header>
        <main>