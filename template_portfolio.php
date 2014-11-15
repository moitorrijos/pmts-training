<?php
/*
Template Name: Portfolio
*/
$portfolio_temp="true";

get_header();

?>
<?php 
if (get_option('rttheme_style')){
	$which_theme=get_option('rttheme_style');
}else{
	$which_theme="1";		
}
?>
<div class="sub_header">  
</div>

<div class="content_con2">

		<!-- Porfolio Slider -->
		<div class="content sub">
			<h2>
				<?php global $current_user;
			      get_currentuserinfo();
			      echo 'Welcome to your course ' . $current_user->display_name . ':';
				?>
			</h2>
		</div>
		<!-- Potfolio Slider-->
		
	    <div class="clear"></div>

		<?php
		$more = 0;

		//paging
		if (get_query_var('paged') ) {$paged = get_query_var('paged');} elseif ( get_query_var('page') ) {$paged = get_query_var('page');} else {$paged = 1;}		
		 
 
		if(is_category()){//category
			$query_string='cat='.get_query_var('cat').'&paged='.$paged.'&posts_per_page='.get_option("rttheme_portf_pager").'&post_status=publish&orderby=date&order=DESC';
		}elseif(get_option('rttheme_portf_start_cat')){//start page with start category
			$query_string='cat='.get_option('rttheme_portf_start_cat').'&paged='.$paged.'&posts_per_page='.get_option("rttheme_portf_pager").'&post_status=publish&orderby=date&order=DESC';
		}else{//start page with all categories
			
			$query_string='cat='.get_option('rttheme_portf_ex_cat[]').'&paged='.$paged.'&posts_per_page='.get_option("rttheme_portf_pager").'&post_status=publish&orderby=date&order=DESC';
		}
		query_posts($query_string);
		?>
			<?php if ( current_user_is("s2member_level0") ) : ?>

				<?php 
					$box_counter=0;
					if (have_posts()) : while (have_posts()) : the_post();?>
	

				<?php
				if (preg_match("/(png|jpg|gif)/", get_post_meta($post->ID, 'rt_portfolio_image', true))) {
					$button="magnifier";
				} else {
					$button="play";
				}
				?>
	    
				<!-- box -->
				<div class="box big_box">
				    <img src="<?php bloginfo('template_directory'); ?>/images/<?php echo $which_theme;?>/big_box_top.jpg" alt="" class="p_image_top" />
					
		    
					<!-- portfolio title-->
					<h5><a href="<?php echo get_permalink() ?>" title="" class="portfolio_title"><?php the_title(); ?></a></h5>
					
					
					
					<!-- portfolio image for images -->
					<div class="imgarea <?php if(get_post_meta($post->ID, 'rt_portfolio_image', true)):?><?php echo $button;?><?php endif;?>">

						<?php if(get_post_meta($post->ID, 'rt_portfolio_image', true)):?>
						<a href="<?php echo get_permalink(); ?>" title="<?php the_title(); ?>" >								
						<?php if(get_post_meta($post->ID, 'rt_portfolio_thumb_image', true)):?>									
								<img src="<?php echo get_post_meta($post->ID, 'rt_portfolio_thumb_image', true);?>" alt="<?php the_title(); ?>" class="image portfolio preload" />
						<?php else:?>
								<img src="<?php bloginfo('template_directory'); ?>/timthumb.php?src=<?php echo get_post_meta($post->ID, 'rt_portfolio_image', true)?>&amp;w=259&amp;h=100&amp;zc=1" alt="<?php the_title(); ?>" class="image portfolio preload" />
						<?php endif;?>
						</a>
						<?php endif;?>

					</div>

					<p>
					<!-- text-->
					<?php echo get_post_meta($post->ID, 'rt_portfolio_desc', true);?>
					</p>
					<p>
					<a href="<?php echo get_permalink() ?>" class="button read_more">See Course</a>
					</p>		
		    
				    <img src="<?php bloginfo('template_directory'); ?>/images/<?php echo $which_theme;?>/big_box_bottom.jpg" alt=""  class="p_image_bottom" />
				</div>
				<!-- /box -->

				<?php
					$box_counter++;
					if ($box_counter==3){echo "<div class=\"clear\"></div>";$box_counter=0;}
				?>

			<?php endwhile; ?>
			<!-- /portfolio boxes -->
		

				<div class="clear"></div>
				<!-- portfolio paging-->
				<div class="paging portfolio">
					<ul>
						<?php get_pagination(); ?>
					</ul>
				</div>
				<!-- /portfolio paging-->

			<?php else: ?>
				<p>No item found in this category.</p>
			<?php endif; ?>
	    <?php else : ?>

				<div class="content sub product_left_side">	

                    <!-- product spot information  -->
					
					
					<!-- product tabs-->
						<div id="tabs">
							<!-- tab content-->
							<div class="box full">
							     <img src="http://panamamaritimetraining.com/wp-content/themes/rttheme9/images/1/full_box_top.jpg" alt="" class="box_curv">
								
								<!-- tab content-->
								<div id="content">
									
									<!-- details-->
									<div id="details" class="tabdiv ui-tabs-panel" style="display: block;">
										<h3>Manila Ammendment Update Material for Instructors</h3>

									    <p>As instructors you are required to understand and know the requirements of the Manila Amendments of 2010 and traspass this knowledge to our students. Bellow you will find all material needed to obtain the required knowledge of all amendments to STCW and upgrade your course curricula.</p>

										<?php get_template_part( 'manila-ammendment-list' ); ?>
										
									</div>
									<!-- / details-->							
								</div>
								
							     <img src="http://panamamaritimetraining.com/wp-content/themes/rttheme9/images/1/full_box_bottom.jpg" alt="" class="box_curv">
							</div>
							<!-- /tab content-->
						</div> 
						<!-- /product tabs-->
				</div>
				<div class="sidebar"><div class="sidebars1"><div class="sidebars2">
					<div class="box small">
						<h5>About Us</h5>
						<div class="menu-rt-theme-footer-navigation-menu-container">
							<ul id="menu-rt-theme-footer-navigation-menu" class="menu">
								<li id="menu-item-457" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-457"><a href="http://localhost:8888/training/about/">About Us</a></li>
								<li id="menu-item-509" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-509"><a href="http://localhost:8888/training/contact-us/">Contact Us</a></li>
								<li id="menu-item-545" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-545"><a href="http://localhost:8888/training/bureau-veritas-certification/">Bureau Veritas Certification</a></li>
								<li id="menu-item-547" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-547"><a href="http://localhost:8888/training/course-application/">Apply for our Courses</a></li>
							</ul>
						</div>
					</div>
					<div class="box small">
						<h5>Maritime Training Tailored to you</h5>
						<div class="textwidget">
							<p>We acknowledge your time and we can tailor courses to your availability.</p>
							<p>If you wish to learn more about our courses please <a href="/contact-us">contact us today</a></p>
						</div>
					</div> 
		
				</div></div></div>
			<div class="clear"></div>
			<?php endif; ?>
  
</div>
<!-- / content -->
<div class="clear"></div>
<!-- / side bar -->
<?php get_footer();?>