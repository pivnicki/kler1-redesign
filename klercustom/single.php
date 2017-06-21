<?php get_header();?>
 
  <body>
   <div class="container">
		<div class="row">
		<div class="col-xs-12 col-sm-12">
		<div class="well" style="overflow:auto;">
			<h1 class="text-center text-uppercase  fw-800 ">
			<?php echo get_the_title();?>
			</h1>
		</div>
		</div>
		</div>
	 
    <div class="row">
		 <div class="well" style="overflow:auto;">
		
		 <div class="col-md-8">
			<div class="blog-post">
           <?php if(have_posts()){
			 while(have_posts()){
				 the_post();
					 ?>
					 <!-- Post -->
				 <article class="col-sm-12">
				 <header>
				  
				 <span class="tag"><?php the_category(','); ?></span>
				 <span class="date"><?php the_time('d M Y G:i'); ?></span>
				 <span class="author"><a href="<?php the_author_link();?>">
				 <?php the_author(); ?></a></span>
				 </header>
				 <p class="image featured text-center">
				  <?php
				 if(has_post_thumbnail()){
					 the_post_thumbnail('medium');
					 }
					 ?>
				  </p>
				 <?php the_content();?>
				 <?php wp_link_pages();?>
				 <?php the_tags();?>
											
				 <?php comments_template();?>
				 </article>
				 <!-- Post -->
				<?php
				}
				}
				?></div><!-- /.blog-post -->
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
