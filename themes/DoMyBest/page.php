<?php get_header() ?>
<p>현재 페이지는 page.php로 표현되는 중임</p>
<!-- <div id="content"> --> 
<div id="main-content" class="main-content">
<div id="content" class="site-content" role="main">
<h1>Hello WordPress..</h1> 
<img src="http://via.placeholder.com/350x150">
<hr>
<?php 
if(have_posts()):
 while(have_posts()):the_post();
	  the_content();
  endwhile;
endif;
?>
</div>
</div> 
<?php get_sidebar();?>
<?php get_footer() ?>