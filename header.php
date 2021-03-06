<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>
        <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
        
    </head>
    <body>

    	<div class="container">
    		
    		<!-- Static navbar -->
	      <nav class="navbar navbar-default">
	        <div class="container-fluid">
	          <div class="navbar-header">
	            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	              <span class="sr-only">Toggle navigation</span>
	              <span class="icon-bar"></span>
	              <span class="icon-bar"></span>
	              <span class="icon-bar"></span>
	            </button>
	            <a class="navbar-brand" href="#"><?php //wp_title( '|', true, 'right' ); ?></a>
	          </div>
	          <div id="navbar" class="navbar-collapse collapse">
	            <!-- <ul class="nav navbar-nav"> -->
	              <?php wp_nav_menu(array('theme_location' => 'main-menu','menu_class'=>'nav navbar-nav','container'=>'ul')); ?>
	            <!-- </ul> -->
	            <ul class="nav navbar-nav navbar-right">
	            	<?php get_search_form(); ?>
	            </ul>
	          </div><!--/.nav-collapse-->
	        </div><!--/.container-fluid -->
	      </nav>
    	</div>