<?php
/* Template Name: Privrednici Turija */

get_header(); 
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$loop=new WP_Query(array(
'category_name'=>'privrednik-turija',
'orderby'=>'post_id',
'paged' => $paged,
'order'=>'ASC')); 
?>
  <body background="assets/img/klerbg.png">
   <div class="container">
		<div class="row">
		<div class="row">
		<div class="col-xs-12 col-sm-12">
		<div class="well" style="overflow:auto;">
			<h1 class="text-center text-uppercase  fw-800 ">
			Kategorija za <u><?php echo single_cat_title();?></u>
			</h1>
		</div>
		</div>
 
  </div>
    </div>
	 
    <div class="row">
		 <div class="well" style="overflow:auto;">
		<div class="row">
		 <div class="col-md-8">
			<div class="panel panel-default">
				<div class="panel-body">
				<?php
				while ( have_posts() ) :  the_post();

				?>
				<div class="col-sm-12">
				<a  class="text-center" href="<?php the_permalink(); ?>">
				<?php the_title();?></a>
				<hr></hr>
				
				 
			</div>
			<?php
				
				endwhile; // End of the loop.
			?> 
			</div>
			 </div>
			<div class="col-md-12">
			<?php
			  if (function_exists("pagination")) {
					pagination($loop->max_num_pages);
						}
			 ?>
			</div>
		</div>
		<div class="xs-hiden col-sm-12 col-md-4">
		<?php get_sidebar();?>
		</div>
	 
	</div>
	</div>
<!--/.fluid-container-->
<?php get_footer();?>
