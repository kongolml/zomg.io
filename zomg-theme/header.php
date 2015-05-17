<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//zomg.io/" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.fullPage.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/js/owl-carousel/css/owl.carousel.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/js/owl-carousel/css/owl.theme.default.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/js/owl-carousel/css/owl.animate.css">

        <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>
		<!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    	<nav class="navbar navbar-default unfolded">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">
                <img alt="Zomg logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png">
              </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav nav-justified">
                <div class="pointer"></div>
                <li class="active" data-menuanchor="intro"><a href="#intro">intro</a></li>
                <li data-menuanchor="services"><a href="#services">services</a></li>
                <li data-menuanchor="approach"><a href="#approach">approach</a></li>
                <li data-menuanchor="team"><a href="#team">team</a></li>
                <li data-menuanchor="portfolio"><a href="#portfolio">portfolio</a></li>
                <li data-menuanchor="about"><a href="#about">about</a></li>
                <li data-menuanchor="contact"><a href="#contact">contact</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container -->
        </nav>