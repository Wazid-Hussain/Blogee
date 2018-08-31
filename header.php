<html>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" >
	<title><?php bloginfo('name');?>?</title>

	<?php wp_head();?>
</head>
<body>
	<header>
		<div class="container">
			<div class="site-name">
				<a href="<?php echo get_home_url(); ?>"><?php bloginfo('name'); ?></a>
				<p><?php bloginfo('description'); ?></p>
			</div><!--Site Name Div close-->
		</div>
		<nav>
			<div class="container">
				<?php 
					$args = array(
								'theme_location'	=> 'primary',
								'container_id'		=> 'primary-menu-container',
								'container_class'	=> 'primary-menu-container',
								'menu_id'			=> 'primary-menu',
								'menu_class'		=> 'primary-menu',
							);
				 ?>
	          	<?php wp_nav_menu($args); ?>
	        </div>
	    </nav><!--Nav close-->

	</header><!--header close-->
			

