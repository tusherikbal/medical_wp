<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package medical_theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<?php $options = get_option('theme_options'); ?>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'medical_theme' ); ?></a>

	
	

	<header>
	<div class="header-top-bar">
		<div class="container">
			<div class="row align-items-center">
			
			<?php 
		// $options = get_option('top_email');





		
		
		
	
	
	?>
				<div class="col-lg-6">
					<ul class="top-bar-info list-inline-item pl-0 mb-0">
						<li class="list-inline-item"><a href="mailto:<?php echo $options['top_email']; ?>"><i class="icofont-support-faq mr-2"></i><?php echo $options['top_email']; ?></a></li>
						<li class="list-inline-item"><i class="icofont-location-pin mr-2"></i><?php echo $options['top_address']; ?></li>
					</ul>
				</div>
				<div class="col-lg-6">
					<div class="text-lg-right top-right-bar mt-2 mt-lg-0">
						<a href="tel:<?php echo $options['top_Phone_number']; ?>">
							<span>Call Now : </span>
							<span class="h4"><?php echo $options['top_Phone_number']; ?></span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<nav class="navbar navbar-expand-lg navigation" id="navbar">
		<div class="container">
			<a class="navbar-brand" href="<?php site_url(); ?>">
				<img src="<?php echo $options['logo_image'] ?>" alt="" class="img-fluid">
			</a>

			<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain"
				aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
				<span class="icofont-navigation-menu"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarmain">
				
				<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					// 'menu_id'        => 'navbarmain',
					'menu_class'  => 'navbar-nav ml-auto',
					'before'			=> "", 
					'after'				=> "",
				)
			);
			?>

	
			
			</div>
		</div>
	</nav>
</header><!-- #masthead -->









	