<?php get_header();?>
	 <!-- header end -->
   <div id="main-body">
    <div id="main-body-left">


<?php 
if(have_posts()):
  while(have_posts()):
    the_post();
    ?>
      <div class="blogcard">
      <?php if(has_post_thumbnail()):?>
      <?php the_postthumbnail('thumbnail');?>
      <?php else:?>

      <img src="<?php echo get_template_directory_uri();?>img/ default.png" width="150" height="150">
      <?php endif; ?>
      <div class="posts">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
        <div class="info"><?php echo get_the_date();?>【<?php the_category(',');?>】</div>
        <p><?php the_excerpt(); ?></p>
      </div>
      </div>
<?php 
endwhile;
else:?>
<p>記事はありません</p>
<?php endif ?>



    
      <div id="prenext">
        <div class="pre"><?php previous_posts_link();?></div>
        <div class="next"><?php next_posts_link();?></div>
     </div>
 
    </div>
<!--left end-->
 <?php get_sidebar();?>
 
<!--sidebar end-->
</div>
	<?php get_footer();?>
  <!-- footer end -->