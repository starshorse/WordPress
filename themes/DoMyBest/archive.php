<?php get_header() ?>
<p>보이는 페이지는 archive.php로 표현됨</p> 
<p><?php single_cat_title('archive:');?>에 속한 글들</p> 
<!-- <div id="content"> --> 
<div id="main-content" class="main-content">
<div id="content" class="site-content" role="main">
<h1>Hello WordPress..</h1> 
<img src="http://via.placeholder.com/350x150">
<hr>
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
<?php get_footer() ?>