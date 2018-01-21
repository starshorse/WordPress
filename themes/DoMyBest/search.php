<?php get_header();?> 
<!-- <div id="content"> --> 
<div id="main-content" class="main-content">
<div id="content" class="site-content" role="main">
<h1>Hello WordPress..</h1> 
<img src="http://via.placeholder.com/350x150">
<hr>
<p>현재 페이지는 search.php로 표현중</p> 
<p><?php printf(__('Search Results for %s'), get_search_query());?></p>
<?php
if(have_posts()):
	while(have_posts()):the_post(); 
	   the_ID();?>:
	   <a href=<?php the_permalink();?>><?php the_title();?></a>
	<br> 
<?php 
   endwhile;
 endif;
 ?> 
 </div>
</div> 
<?php get_sidebar();?>
 <?php get_footer();?>
 