<?php

function klercustom_setup_theme(){
	// register_nav_menu('primary',__('Primary Menu'));
	  register_nav_menus(
    array(
      'primary' => __( 'Primary Menu' ),
      'another-menu' => __( 'Another Menu' ),
      'footer_menu' => __( 'Footer Menu' )
    )
  );
	 
}
