<footer class="navbar container-fluid">
  <div class="copyright">
  <div class="container">
    <div class="col-sm-6">
      <p>© 2017 -<a href="<?php echo esc_url( __( 'http://easyit.rs/', 'Easy IT' ) ); ?>">
	  <?php printf( __( 'Theme by %s', 'Easy IT' ), 'Easy IT' ); ?></a>
	</div>
    <div class="col-sm-6">
     	<?php wp_nav_menu(
					array(
						'theme_location'=>'footer_menu',
						'container'=>false,
						'menu_class'=>'nav navbar-nav'
					)
				);?>
    </div>
  </div>
</div> 
    </footer>
		<?php wp_footer();?> 
</body>
</html>