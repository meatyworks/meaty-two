<?php
/*
 * Template Name: Page
*/

get_header(); ?>

  <div class="container">  
<?php if ( have_posts()) : while ( have_posts()) : the_post(); ?>
	<div class="col-md-12" >
 	 	<h1>
 	 	<?php the_title(); ?>
 	 	</h1>
 	 	<?php the_content(); ?>
 	</div> 

<!--
<?php $home = new WP_Query('tag=about&order=ASC&posts_per_page=1'); ?>
<?php while ($home->have_posts()) : $home->the_post(); ?> 	
			
  	<div class="col-md-12" >
 	 	<h1>
 	 	<?php the_title(); ?>
 	 	</h1>
 	 	<?php the_content(); ?>
 	</div> 

<?php endwhile; ?>    	
-->	  

  <?php endwhile; ?>
  		
  </div>
  	<?php endif; ?>

  	<hr/>

<?php get_footer(); ?>