<?php

function klercustom_enqueue(){
	wp_register_style( 'klercustom_bootstrap','https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
	wp_register_style( 'klercustom_min.css','https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
	wp_register_style( 'klercustom_font-awesome','https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
	wp_register_style( 'klercustom_wpcss',get_template_directory_uri().'/style.css');
	
	//custom css
	wp_register_style( 'klercustom_css',get_template_directory_uri().'/assets/css/style.css');
	
	wp_enqueue_style('klercustom_bootstrap');
	wp_enqueue_style('klercustom_min.css');
	wp_enqueue_style('klercustom_font-awesome');
	wp_enqueue_style('klercustom_wpcss');
	wp_enqueue_style('klercustom_css');
	
	
	wp_register_script('klercustom_bootstrap.js','https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js',array(),false,true);
	// wp_register_script('klercustom_gmap.js','http://maps.google.com/maps/api/js?key=AIzaSyDEZ5RlhXnEkXC3G34ZTb_lOVjVOXQuFkA&callback=initialize',array(),false,true);
	
	
	wp_enqueue_script('jquery');
	wp_enqueue_script('klercustom_bootstrap.js');
	// wp_enqueue_script('klercustom_gmap.js');
	}
	 