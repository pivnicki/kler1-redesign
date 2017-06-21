 
<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo get_bloginfo( 'name' ) . ' : '. get_bloginfo( 'description' ); ?></title>

  <?php wp_head(); ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   </head>
<body>
 <!-- Navigation -->
  
			
	 <nav class="navbar navbar-inverse">
	<div class='container-fluid'>
	<!-- LOGO -->

		<div class='navbar-header'>
			<button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#navBar'>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>

			</button>
			<a href="<?php get_home_url();?>" class='navbar-brand'>KLER Srbobran</a>
		</div>

		<!-- MENU-->
		<div class='collapse navbar-collapse' id='navBar'>
			<ul class='nav navbar-nav'>
				 
			 <?php wp_nav_menu(
					array(
						'theme_location'=>'primary',
						'container'=>false,
						'menu_class'=>'nav navbar-nav'
					)
				);?>
					<div class="navbar-form navbar-left" role="search">
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Search Menu") ) : ?>
				 <?php endif;?>
					
				 </div> 
		</div>
	</div>
</nav>