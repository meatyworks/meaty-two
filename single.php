<?php
/*
 * Template Name: Single.
*/

get_header(); ?>

  <div class="container animated fadeIn">  
  			
	<?php if ( have_posts()) : while ( have_posts()) : the_post(); ?>
			
  	<div class="col-md-12" >
 	 	<h1>
 	 	<?php the_title(); ?>
 	 	</h1>
 	 	<?php the_content(); ?>
 	</div> 

  <?php endwhile; ?>
  		
  </div>
  	<?php endif; ?>
	
  	<hr/>

<?php get_footer(); ?>