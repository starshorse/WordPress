<?php get_header() ?>
<p>Single.php display</p>
<!-- <div id="content"> --> 
<div id="main-content" class="main-content">
<div id="content" class="site-content" role="main">
<h1>Hello WordPress..</h1> 
<img src="http://via.placeholder.com/350x150">
<hr>
<?php 
if(have_posts()):
 while(have_posts()):
    the_post(); ?>
  <p>제목:<?php the_title();?></p>
  <?php the_content();?>
  <br>
<!--  
  <object id="miniwini" width="650" height="400" type="text/x-scriptlet"> 
  <param name="url" value=http://banpo.or.kr/technote7/gallery001.php> 
  <param name="selectablecontent" value="0"> 
  <param name=scrollbar value="1"> 
   </object>
-->   
<?php
	// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
  endwhile;
?>
 <nav class="navigation post-navigation" role="navigation">
<?php  
  	previous_post_link( '%link', __( '<span class="meta-nav">Previous Post : </span>%title', 'DoMyBest' ) );
	echo "<br>";
    next_post_link( '%link', __( '<span class="meta-nav">Next Post :</span>%title', 'DoMyBest' ) );
?>
</nav> 
<?php  
endif;
?>
</div>
</div> 
<?php get_sidebar();?>
<?php get_footer() ?>
