<?php
/* Template Name: Newsletter */
 get_header();
 ?>
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
			<blockquote class="col-sm-12">
			Ukoliko ste poljoprivrednik, privrednik, preduzetnik ili imate udruženje, unesite
			Vaš email kako biste se predplatili na mailing listu kancelarije za lokalni i ekonomski razvoj Srbobrana.
			</blockquote>
      
				<!-- Post -->
				 <div class="col-sm-6 col-sm-offset-3">
				 <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Newsletter") ) : ?>
				 <?php endif;?>
				 </div>
				 <!-- Post -->
			 
			</div><!-- /.blog-post -->
		</div>
		<div class="xs-hiden col-sm-12 col-md-4">
		<?php get_sidebar();?>
		</div>
	</div>
	</div>
	</div>
<!--/.fluid-container-->
<?php get_footer();?>
