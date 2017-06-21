<?php get_header();?>
 <body>
   <div class="container">
		<div class="row">
		<div class="col-xs-12 col-sm-12">
		<div class="well" style="overflow:auto;">
			<h1 class="text-center text-uppercase  fw-800 ">
			Rezultat pretrage <?php the_search_query();?>
			</h1>
		</div>
		</div>
		</div>
	 <div class="row">
		 <div class="well" style="overflow:auto;">
		 <div class="col-md-8">
		 <div class="blog-post">
           <?php if(have_posts()){ 
					 ?>
					<div class="col-sm-12">
				<a  class="text-center" href="<?php the_permalink(); ?>"><?php the_title();?></a>
				<hr></hr>
			    </div>
				<?php
				}
				  else{?>
				 
				 <p class="col-sm-12">
				<?php echo "<h3>Ne postoji trazeni pojam</h3>";?>
				 </p>
					
				<?php }
				?>
				</div><!-- /.blog-post -->
		</div>
		<div class="xs-hiden col-sm-12 col-md-4">
		<?php get_sidebar();?>
		</div>
	 </div>
	</div>
	</div>
	 </div>
<!--/.fluid-container-->
<?php get_footer();?>
