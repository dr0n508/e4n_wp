<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<meta name="w1-verification" content="195249625314" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href='http://fonts.googleapis.com/css?family=Bad+Script&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,cyrillic,cyrillic-ext' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/blog.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/styles.css?ver=2" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/courses.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/single-blog.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/payment.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/teachers.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/contacts.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/fancybox/jquery.fancybox.css" />
		<!-- Important Owl stylesheet -->
<!--	<link rel="stylesheet" href="--><?php //echo get_template_directory_uri(); ?><!--/css/owl.carousel.css">-->
	<!-- Default Theme -->
<!--	<link rel="stylesheet" href="--><?php //echo get_template_directory_uri(); ?><!--/css/owl.theme.css">-->

	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body>


<header class="main-header">
    <div class="header-top">
        <ul class="clearfix">
            <li><a href="#"><i class="fa fa-envelope"></i> info@english4now.com</a></li>
            <li class="skype-contact"><a href="#"><i class="fa fa-skype"></i> english4now.com</a></li>
            <li class="recall-contact"><a href="#" data-toggle="modal" data-target="#order-call">Перезвоните мне</a></li>
            <li class="phone-contact"><i class="fa fa-phone-square"></i> +7(499)-348-13-28</li>
        </ul>
    </div>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">E<span class="close-logo">nglish</span><span class="logo-for">4</span>n<span class="close-logo">ow</span></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="fa fa-home"></i>Главная</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>discount/"><i class="fa fa-money"></i>АКЦИЯ</a></li>
		    
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-book"></i>Курсы <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <?php wp_nav_menu('menu=Курсы'); ?>
                        </ul>
                    </li>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>teachers/"><i class="fa fa-users"></i>Преподаватели</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#spent-lesson"><i class="fa fa-graduation-cap"></i>Про урок</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>sale/"><i class="fa fa-money"></i>Оплата</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#faq"><i class="fa fa-question-circle"></i>FAQ</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>blog/"><i class="fa fa-calendar"></i>Блог</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>contacts/"><i class="fa fa-envelope"></i>Контакты</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>








