<?php
/*
  Template Name:Page Home
 */
 get_header(); 
 
 $left1=get_field('left1');
 $left2=get_field('left2');
 $left3=get_field('left3');
 
 $down1=get_field('down1');
 $down2=get_field('down2');
 $down3=get_field('down3');
 
 $loop=new WP_Query(array(
'category_name'=>'naslovna',
'orderby'=>'post_id',
'paged' => $paged,
'order'=>'ASC')); 
 ?>
 
 <?php 
 /*Desavanja*/
$args = array( 
'post_type' => 'desavanja',
 'posts_per_page' => 10 );
$the_query = new WP_Query( $args ); 
?>
 
<div class="container-fluid">
 <div class="row">
        <aside class="col-md-2 col-xs-12 col-sm-12">
           <p class="text-center side-box border-green box-shadow">
			<a class="text-uppercase fw-800" href="<?php echo $left1;?>">Srbobran</a>
			</p>
            <p class="text-center side-box middle-box border-green box-shadow">
			<a class="text-uppercase fw-800" href="<?php echo $left2;?>">Turija</a>
			</p>
           <p class="text-center side-box border-green box-shadow">
			<a class="text-uppercase fw-800" href="<?php echo $left3;?>">Nadalj</a>
			</p>
                
            
            <!--/sidebar-nav-fixed -->
        </aside>
        <!--/span-->
  <div class="col-md-6 col-xs-12 col-sm-12">
		
  <div id="myCarousel" class="carousel slide">
 <div class="carousel-inner img-responsive">
  <?php 
 
   while ( $loop->have_posts() ) : 
   $loop->the_post();
  ?>
   <div class="item active">
    <?php the_post_thumbnail('large');?>
    <div class="carousel-caption">
     <h4>
	 <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
	 </h4>
      
    </div>
   </div><!-- item active -->
  <?php 
   endwhile; 
   wp_reset_postdata();
  ?>
  <?php 
   
   while ( $loop->have_posts() ) : 
   $loop->the_post();
  ?>
   <div class="item">
    <?php the_post_thumbnail('large');?>
    <div class="carousel-caption">
     <h4>
	 <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php echo the_title(); ?></a>
	 </h4>
     </div>
   </div><!-- item -->
  <?php 
   endwhile; 
   wp_reset_postdata();
  ?>
 </div><!-- carousel-inner -->
 <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
 <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div><!-- #myCarousel -->
 
<div class="section group col-xs-12 col-sm-12">
	<div class="col-xs-12 col-sm-12 col-md-4 box-shadow col   bor bg-box">
		<p class="text-center">
		<i class="fa fa-users fa-props" aria-hidden="true"></i>
		</p>
		<p class="text-center">
		<a class="text-uppercase fw-800" href="<?php echo $down1;?>">Aktivnosti</a>
		</p>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-4 box-shadow col  bor  bg-box">
	<p class="text-center">
	<i class="fa fa-list fa-props" aria-hidden="true"></i>
	</p>
	<p class="text-center">
		  <a class="text-uppercase fw-800" href="<?php echo $down2;?>">Konkursi</a>
	</p>
	</div>
	<div class="col-xs-12 col-sm-12 box-shadow col-md-4 col   bor  bg-box">
	<p class="text-center">
	<i class="fa fa-tasks fa-props" aria-hidden="true"></i>
	</p>
	<p class="text-center">
		  <a class="text-uppercase fw-800" href="<?php echo $down3;?>">Bilten</a>
	</div>
	</p>
</div>
 
        </div>
        <!--/span-->
		<!--Desavanja-->
        <div class="col-md-4 col-xs-12 col-sm-12">
         <div class="col-sm-12 cal-element border-green">
					<?php 
 
   while ( $the_query->have_posts() ) : 
   $the_query->the_post();
  ?>
   <div class="event-display">
    <h4>
	 <a class="fw-800" href="<?php the_permalink(); ?>" title="<?php  the_excerpt(); ?>">
	 <?php the_title();?>
	 </a>
	 </h4>
      
   </div><!-- item active -->
  <?php 
   endwhile; 
   wp_reset_postdata();
  ?>
		 </div> 
		
	<div class="section group">
	<div class="box-shadow col col-xs-12 col-sm-12 col-md-6 bor bg-box">
	<p class="text-center">
	<i class="fa fa-envelope-o fa-props" aria-hidden="true"></i>
	</p>
	<p class="text-center">
	<a class="text-uppercase fw-800" href="http://localhost/wordpress_kler/kontakt/">Kontakt</a>
	</p>
	</div>
	
	<div class="box-shadow col col-xs-12 col-sm-12 col-md-6 bor bg-box">
	<p class="text-center">
	<i class="fa fa-building-o fa-props" aria-hidden="true"></i>
	</p>
	<p class="text-center">
		<a class="fw-800" href="<?php echo esc_url( __( 'srbobran.rs/', 'Opstina Srbobran' ) ); ?>">
	  <?php printf( __( 'Opstina %s', 'Srbobran' ), 'Srbobran' ); ?></a>
	</p>
	 
	</div>
</div>
        </div>
        <!--/span-->
    </div>
    <!--/row-->

    
</div>
<!--/.fluid-container-->
	<?php get_footer();?>

