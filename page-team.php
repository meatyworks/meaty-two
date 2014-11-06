<?php
/*
 * Template Name: Team Page
*/

get_header(); ?>

  <div class="container team-imgs">  

<?php $team = new WP_Query('tag=team&order=ASC'); ?>
<?php while ($team->have_posts()) : $team->the_post(); ?> 	
<div class="col-md-12 clearfix" style="margin-bottom: 40px;">			
  	<div class="col-md-4" >
  	
  	<?php if ( has_post_thumbnail()) { the_post_thumbnail('team-thumb'); } ?>
 
 	</div> 
  	<div class="col-md-6" >
 	<h1>
 	 	<?php the_title(); ?>
 	 	</h1>
 	 	<?php the_content(); ?>
	</div>
</div>
<?php endwhile; ?>    		  

	</div>

  	<hr/>

<?php get_footer(); ?>