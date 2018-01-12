<?php get_header() ?>

<p>-------Single.php -----------------</p> 
<?php
	if( have_posts() ):
/* Start the Loop */
			while ( have_posts() ) : the_post();
		?><p>제목 : <?php the_title();?></p>
		<?php	
			    the_content(); 
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;				
            endwhile;
endif; 
?> 
 
 <?php get_footer() ?>