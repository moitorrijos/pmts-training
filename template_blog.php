<?php
/*
Template Name: Blog
*/
$blog_temp="true";
get_header(); 
?>

<div class="sub_header">

    <!-- search -->
	    <div class="search_bar">
		<form action="<?php bloginfo('url'); ?>" method="get" id="search_form">
		    <input type="text" class="search_text" name="s" id="s" value="SEARCH OUR COURSES" /><input type="image" src="<?php bloginfo('template_directory'); ?>/images/pixel.gif" class="searchsubmit" alt="" />
		</form>
	    </div>
    <!-- / search-->		    
</div>


<div class="content_con2">

<!-- left side content -->
<div class="content sub">
 
		<?php
		$more = 0;
		//paging
 
		if (get_query_var('paged') ) {$paged = get_query_var('paged');} elseif ( get_query_var('page') ) {$paged = get_query_var('page');} else {$paged = 1;}				
		
		$query_string='cat='.get_option('rttheme_blog_ex_cat[]').'&paged='.$paged.'&posts_per_page='.get_option("rttheme_blog_pager").'&post_status=publish&orderby=date&order=DESC';		
		query_posts($query_string);		
		?>
			
		
		   <?php if (have_posts()) : while (have_posts()) : the_post();?>
				
				<!-- blog box-->
					<div class="box blog">
							<!-- blog headline-->
								<h3><a href="<?php echo get_permalink() ?>" title=""><?php the_title(); ?></a></h3> 
							<!-- / blog headline-->
							
								<?php if(get_post_meta($post->ID, 'rt_post_image', true)):?>
								<!-- blog image-->
									<?php if(!get_option('rttheme_blog_resize')):?>
										<a href="<?php echo get_permalink() ?>" title=""><img src="<?php bloginfo('template_directory'); ?>/timthumb.php?src=<?php echo get_post_meta($post->ID, 'rt_post_image', true)?>&amp;w=615&amp;h=120&amp;zc=1" alt=""  class="aligncenter post_image preload" /></a>
									<?php else:?>
										<a href="<?php echo get_permalink() ?>" title=""><img src="<?php echo get_post_meta($post->ID, 'rt_post_image', true);?>" alt="" class="aligncenter post_image preload" /></a>
									<?php endif;?>
								<!-- / blog image -->
								<?php endif;?>
							
							<!-- blog text-->									
							 
								<?php the_content(''); ?>
								<a href="<?php echo get_permalink() ?>" title=""  class="read_more">read more</a>
							 
							<!-- /blog text-->
							
		
					</div>
				<!-- blog box-->
				
				
			<?php endwhile; ?>
			
				<div class="paging blog">
					<ul>
						<?php get_pagination(); ?>
					</ul>
				</div>				
			<?php else: ?>
				<p>Sorry, no posts matched your criteria.</p>
			<?php endif; ?>

</div>
<!-- / left side content -->

<!-- side bar -->
<div class="sidebar"><div class="sidebars1"><div class="sidebars2">
		
		<?php include(TEMPLATEPATH."/sidebar.php");?>
		<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar For Blog')){} ?>  
		<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Common Sidebar')){} ?>  
		<?php
		rt_ud_sidebars('page',get_option('rttheme_blog_page'));
		?>

</div></div></div>
<div class="clear"></div>
<!-- / side bar -->
 </div>



<?php get_footer();?>