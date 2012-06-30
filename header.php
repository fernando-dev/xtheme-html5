<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php
            global $page, $paged;

            wp_title( ' ', true, 'right' );
            
            ?></title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta name="robots" content="index, follow" />
        <meta name="author" content="Fernando Moreira Costa" />
        <meta name="contact" content="fernando.moreira.costa@gmail.com" />
        
        <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css" media="screen" />
        
        <link href="http://fonts.googleapis.com/css?family=Istok+Web&amp;v2" rel="stylesheet" type="text/css"/>
        <link href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&amp;v2" rel="stylesheet" type="text/css" />
        <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/slider.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/script.js"></script>
        
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <div id="container" class="clearfix">
            <header id="headercont" class="clearfix">

                <section id="header">
                    <article id="logocont">
                        <h1><a title="<?php bloginfo( 'name' ); ?> &raquo; <?php bloginfo( 'description' ); ?>" href="<?php bloginfo('siteurl');?>/"><?php bloginfo( 'name' ); ?>  <span><?php bloginfo( 'description' ); ?></span></a></h1>
                    </article>
                    <nav>
                        <ul>
                            <li><a href="<?php echo get_settings('home'); ?>">Home</a></li>
                            <?php wp_list_pages('sort_column=menu_order&depth=1&title_li='); ?>
                        </ul>
                    </nav>
                </section>
                
                <div class="clear"> </div>

                <div id="categories">
                    <ul>
                         <?php wp_list_categories('show_option_none=Nenhuma categoria&title_li='); ?>
                    </ul>
                </div>
                
                <div class="clear"> </div>
                
                <?php if (is_front_page()){ ?>
                    <?php include (TEMPLATEPATH . '/slider.php'); ?>
                <?php } ?>
                
                <div class="clear"> </div>
            </header>