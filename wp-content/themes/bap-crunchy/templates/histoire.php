<?php
/*
  Template Name: histoire
  
*/
	get_header();
	if( have_posts() ) : while( have_posts() ) : the_post(); ?>
  
		<article class="post">
      
        	<?php the_post_thumbnail(); ?>
            
            <?php the_content(); ?>
<br>
	<?php endwhile; endif;
	get_footer();
?>