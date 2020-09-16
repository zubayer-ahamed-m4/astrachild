<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title><?php bloginfo( 'name' ); ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo get_theme_file_uri(); ?>/assets/css/xpert-custom.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo get_theme_file_uri(); ?>/assets/css/fontawesome.all.min.css"/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="<?php echo get_theme_file_uri(); ?>/assets/js/fontawesome.all.min.js"></script>

    <?php wp_head(); ?>
</head>
<body>
    <!-- Header top -->
    <!-- <section class="header-top-section">
        <div class="container-fluid">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            Header top
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Header -->
    <section class="header-section">
        <div class="container-fluid">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="site-logo">
                                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/logo/xpertdesigner_Logo.png" alt="Xpert Designer">
                            </div>
                        </div>
						<div class="col-md-6" style="text-align: right;">
							<ul class="header-nav">
								<li><a href=""><i class="fas fa-sign-in-alt"></i> Sign In</a></li>
							</ul>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Header bottom -->
    <section class="header-bottom-section">
        <div class="container-fluid">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <ul class="main-nav">
                                <li class="active"><a href="">Home</a></li>
                                <li><a href="">About</a></li>
                                <li><a href="">Contact</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul class="cart-nav">
                                <li><a href=""><i class="fas fa-heart"></i> 5</a></li>
                                <li><a href=""><i class="fas fa-cart-plus"></i> 2</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Nav -->
    <section class="nav-section">
        <div class="container-fluid">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                           <ul class="category-nav">
                               <li class="active"><a href="">Android</a></li>
                               <li><a href="">Wordpress</a></li>
                               <li><a href="">Logo</a></li>
                               <li><a href="">PSD</a></li>
                               <li><a href="">XD</a></li>
                           </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>