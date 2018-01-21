
<?php get_header() ?>
<!-- <div id="content"> --> 
<div id="main-content" class="main-content">
<div id="content" class="site-content" role="main">
<h1>Hello WordPress..</h1> 
<img src="http://via.placeholder.com/350x150">
<hr>
<?php 
if(have_posts()):
 while(have_posts()):
    the_post();?>
<!--제목만 보이게 하기 위해서 	  the_content();-->
<!--Post thumbnail 테스트 중.. -->
   <div class="test_box"><?php the_ID();?>:
        <?php if ( has_post_thumbnail() ) : ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
			<?php the_post_thumbnail(array(50,50)); ?>
			</a>
		<?php endif; ?>
		<a href=<?php the_permalink()?>> <?php the_title();?></a>
		 <br>
	</div>	 
<?php 		 
  endwhile;
endif;
?>
</div>
</div> 
<?php get_sidebar();?>
<?php get_footer() ?>
