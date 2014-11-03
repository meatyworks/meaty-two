<?php
/*
 * Template Name: Page.
*/

get_header(); ?>

  <div class="container">  
	<?php if ( have_posts()) : while ( have_posts()) : the_post(); ?>
			
  	<div class="col-md-12" >
 	 	<div class="col-md-4">
 	 	<h1>
 	 	<?php the_title(); ?>
 	 	</h1>
 	 	</div>
 	 	<div class="col-md-8 body">
 	 	<?php the_content(); ?>
		</div> 	 	
 	</div> 
  			 <?php endwhile; ?>
  </div>
  	<?php endif; ?>
  	<hr/>

<?php get_footer(); ?>