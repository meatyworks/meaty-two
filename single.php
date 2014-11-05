<?php
/*
 * Template Name: Single.
*/

get_header(); ?>

  <div class="container animated fadeIn">  
  			
	<?php if ( have_posts()) : while ( have_posts()) : the_post(); ?>
			
  	<div class="col-md-12" >
  	<?php if(has_tag('team')) { ?>
  	<div class="col-md-6">
  	<?php if ( has_post_thumbnail()) { the_post_thumbnail('team-thumb'); } ?>
  	</div>
  	<?php } ?>
  	
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