<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head() ?>
	</head>
	<body>

		<!-- Header -->
			<header id="header" class="alt">
				<div class="logo"><a href="<?php echo site_url() ?>">
                    <?php bloginfo('name') ?> <span><?php bloginfo('description') ?></span></a>
                </div>
				<a href="#menu">Menu</a>
			</header>

		<!-- Nav -->
            <?php 
            wp_nav_menu(array(
                'theme_location' => 'head_menu',
                'depth' => 1,
                'container' => 'nav',
                'container_id' => 'menu',
                'menu_class' => 'links'
            ));
            ?>