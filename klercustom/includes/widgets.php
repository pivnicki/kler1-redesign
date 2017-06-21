<?php


function klercustom_widgets(){
	
	register_sidebar(array(
	'name'          => 'klercustom sidebar',
	'id'            => 'klercustom_sidebar',
	'description'   => __('Sidebar za temu klercustom','klercustom'),
        'class'         => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s" style="list-style=none;">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' ));
}

function wpgyan_widgets_init() {

	register_sidebar( array(
		'name' => 'Header Sidebar',
		'id' => 'header_sidebar',
		'before_widget' => '<div id="wpgyan-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );
}

function klercustom_newsletter_init() {

	register_sidebar( array(
		'name' => 'Newsletter',
		'id' => 'newsletter_sidebar',
		'before_widget' => '<div id="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );
}

function klercustom_searchbar_init() {

	register_sidebar( array(
		'name' => 'Search Menu',
		'id' => 'search_menu',
		'before_widget' => '<div id="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );
}