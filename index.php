<?php
/*
 * The main template file.
*/

get_header(); ?>

  <div class="container">  
  			
<?php $home = new WP_Query('tag=about&order=ASC&posts_per_page=1'); ?>
<?php while ($home->have_posts()) : $home->the_post(); ?> 	
			
  	<div class="col-md-12" >
 	 	<h1>
 	 	<?php the_title(); ?>
 	 	</h1>
 	 	<?php the_content(); ?>
 	</div> 

<?php endwhile; ?>    		
  </div>
  	
  	<hr/>

<?php get_footer(); ?>
