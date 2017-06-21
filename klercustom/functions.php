<?php

//Set Up
add_theme_support('menus');
// This theme uses post thumbnails
add_theme_support( 'post-thumbnails' );

//Includes
//front end
include(get_template_directory().'/includes/enqueue.php');

//setup 
include(get_template_directory().'/includes/setup.php');
//widgets
include(get_template_directory().'/includes/widgets.php');


 
//Actions & Filters Hooks
add_action('wp_enqueue_scripts','klercustom_enqueue');
add_action('after_setup_theme','klercustom_setup_theme');
add_action('widgets_init','klercustom_widgets');
add_action( 'widgets_init', 'wpgyan_widgets_init' );
add_action( 'widgets_init', 'klercustom_newsletter_init');
add_action( 'widgets_init', 'klercustom_searchbar_init');

//Shortcodes
 


 
 
 // numbered pagination
function pagination($pages = '', $range = 4)
{  
     $showitems = ($range * 2)+1;  
 
     global $paged;
     if(empty($paged)) $paged = 1;
 
     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   
 
     if(1 != $pages)
     {
         echo "<div class=\"pagination\"><span>Stranica  ".$paged." od ".$pages."</span>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";
 
         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
             }
         }
 
         if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">Next &rsaquo;</a>";  
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last &raquo;</a>";
         echo "</div>\n";
     }
}

/**
 * Custom post type Desavanja
 */

function desavanja_custom_post_type(){
    $labels=array(
        'name'=>'Desavanja',
        'singular_name'=>'Desavanje',
        'add_new'=>'Novo Desavanje',
        'all_items'=>'Sva Desavanja',
        'add_new_item'=>'Dodaj Desavanje',
        'edit_item'=>'Izmeni Desavanje',
        'view_item'=>'Pregled Desavanja',
        'search_item'=>'Pretrazi Desavanja',
        'not_found'=>'Nema u pretrazi',
        'not_found_in_trash'=>'Nema u kanti za smece',
        'parent_item_colon'=>'Parent Item'
    );
    
    $args=array(
        'labels'=>$labels,
        'public'=>true,
        'has_archive'=>true,
        'publicly_queryable'=>true,
        'query_var'=>true,
        'rewrite'=>true,
        'capability_type'=>'post',
        'hierarchical'=>false,
        'supports'=>array('title','editor','excerpt','thumbnail','revisions','custom-fields'),
        'taxonomies'=>array('category','post_tag'),
        'menu_position'=>7,
        'exclude_from_search'=>false,
		'menu_icon'           => 'http://icons.iconarchive.com/icons/mattahan/umicons/24/Letter-D-icon.png'
    );
    
    register_post_type('desavanja',$args);
}

add_action('init','desavanja_custom_post_type');


