<!DOCTYPE html>
<html <?php language_attributes(); ?>>


	<head>
		<meta charset="<?php bloginfo('charset'); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--Oswald Font -->
		<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri());?>/css/tooltipster.css" />
		<!-- home slider-->
		<link href="<?php echo esc_url(get_template_directory_uri());?>/css/pgwslider.css" rel="stylesheet">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>css/font-awesome.min.css">
		<link href="<?php echo esc_url(get_template_directory_uri()); ?>/style.css" rel="stylesheet" media="screen">	
		<link href="<?php echo esc_url(get_template_directory_uri()); ?>/responsive.css" rel="stylesheet" media="screen">	
<?php wp_head(); ?>		
	</head>

	<body <?php body_class(); ?>>
	
		<section id="header_area">
			<div class="wrapper header">
				<div class="clearfix header_top">
					<div class="clearfix logo floatleft">
						<a href=""><h1><span>Yellow</span> Blog</h1></a>
					</div>
					<div class="clearfix search floatright">
						<form>
							<input type="text" placeholder="Search"/>
							<input type="submit" />
						</form>
					</div>
				</div>
				
				
				<div class="header_bottom">
					<nav>
						<?php wp_nav_menu(array(
							'theme_location' => 'primary-menu'
						)); ?>
					</nav>
				</div>
				
				
			</div>
		</section>