<?php get_header() ?>

<h1>Hello World!</h1>
<img src="http://via.placeholder.com/640x480">
<br>
<?php
	if( have_posts() ):
/* Start the Loop */
			while ( have_posts() ) : the_post();
//			    the_content(); 
              the_ID();?>:
	<a href=<?php the_permalink();?>><?php the_title();?></a>
<br>	
          <?php  endwhile;
endif; 
?> 
 
 <?php get_footer() ?>
