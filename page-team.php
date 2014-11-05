<?php
/*
 * Template Name: Team Page
*/

get_header(); ?>

  <div class="container team-imgs">  

<?php $team = new WP_Query('tag=team&order=ASC'); ?>
<?php while ($team->have_posts()) : $team->the_post(); ?> 	
			
  	<div class="col-md-4" >
  	<a href="<?php the_permalink(); ?>">
  	<?php if ( has_post_thumbnail()) { the_post_thumbnail('team-thumb'); } ?>
  	</a>
 	</div> 

<?php endwhile; ?>    		  

	</div>

  	<hr/>

<?php get_footer(); ?>