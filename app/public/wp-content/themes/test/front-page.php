<?php get_header();?>

<div id="content" class="w_1000">

</div>
<section class="sec_news">
	<div class="sec_head">ニュース</div>
	<?php 
	$args=array(
		'post_type'=>'news',
		'posts_per_page'=>5,
		'paged'=>$paged
	);
	$the _query= new WP_Query($args);if($the_query->have_posts()):?>
	<ul>
		<?php if(have_posts()):while(have_posts()):the_post();?>
		<li>
			<a href="<?php the_permalink();?>">
		<div class="thumb">
			<?php if(has_post_thumbnail()){?>
			<?php the_post_thumbnail('medium');?>
			
			<?php }else{?>

			<img src="<?php bloginfo('template_url');?>/images/nophoto.jpg" alt="">
			<?php }?>
		</div>
		<div class="outline">
				<div class="title">
					<?php the_title();?>

				</div>
				<div class="descri"><?php the_excerpt();?></div>
		</div>
		
		
		</a>
		</li>
		<?php endwhile;?>
	</ul>
	<?php endif;?>
</section>
<?php get_footer();?>
