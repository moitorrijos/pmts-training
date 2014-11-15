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


										<ol class="manila-ammendment">
										    <?php 
										    	$file_url = "/wp-content/uploads/updated-courses-for-intructors/";
										    	$files_array = array(
										    		"Report Of The Conference Of The Parties To The International Convention On STCW For Seafarers, 1978, 2010" => "c_105-10.pdf",
													"STCW Convention 1978" 		=> "conveniostcw1978.pdf",
													"Model Course 134e" 		=> "et134e.pdf",
													"Model Course 138e" 		=> "et138e.pdf",
													"Model Course 139e" 		=> "et139e.pdf",
													"Model Course 324e" 		=> "et324e.pdf",
													"Model Course 325e" 		=> "et325e.pdf",
													"Model Course 326e" 		=> "et326e.pdf",
													"Model Course 327e" 		=> "et327e.pdf",
													"Model Course 610e" 		=> "et610e.pdf",
													"Model Course a320e" 		=> "eta320e.pdf",
													"Model Course a321e" 		=> "eta321e.pdf",
													"Model Course b102e" 		=> "etb102e.pdf",
													"Model Course b104e" 		=> "etb104e.pdf",
													"STCW Quick Reference Updated Till July 2014" => "stcw---quick-reference-updated-till-july-2014.pdf",
													"STCW Conf 2 32" 			=> "stcw-conf-2-32.pdf",
													"STCW Conf 2 33" 			=> "stcw-conf-2-33.pdf",
													"STCW Conf 2 34" 			=> "stcw-conf-2-34.pdf",
													"STCW 1978 tema 1 Panama" 	=> "stcw1978tema1-panama.pdf",
													"STCW 1978 tema 2 Panama" 	=> "stcw1978tema2panama.pdf",
													"STCW 1978 tema 3 Panama" 	=> "stcw1978tema3panama.pdf",
													"STCW 1978 tema 4 Panama" 	=> "stcw1978tema4panama.pdf",
													"STCW 1978 tema 5 Panama" 	=> "stcw1978tema5panama.pdf",
													"STCW 1978 tema 8 Panama" 	=> "stcw1978tema8panama.pdf",
													"STCW 1978 tema 9 Panama" 	=> "stcw1978tema9panama.pdf",
													"STCW 1978 tema 10 Panama" 	=> "stcw1978tema10panama.pdf",
													"STCW 1978 tema 11a Panama" => "stcw1978tema11apanama.pdf",
													"STCW 1978 tema 12 Panama" 	=> "stcw1978tema12panama.pdf",
													"STCW 1978 tema 13a Panama" => "stcw1978tema13a-panama.pdf",
													"STCW 1978 tema 13b Panama" => "stcw1978tema13b-panama.pdf",
													"STCW 1978 tema 14a Panama" => "stcw1978tema14a-panama.pdf",
													"STCW 1978 tema 14b Panama" => "stcw1978tema14b-panama.pdf",
													"STCW 1978 tema 15 Panama" 	=> "stcw1978tema15panama.pdf",
													"STCW 1978 tema 16 Panama" 	=> "stcw1978tema16panama.pdf",
													"STCW 1978 tema 17 Panama" 	=> "stcw1978tema17panama.pdf",
													"STCW 1978 tema 18 Panama" 	=> "stcw1978tema18panama.pdf",
													"STCW 1978 tema 19 Panama" 	=> "stcw1978tema19panama.pdf",
													"STCW 1978 tema 20 Panama" 	=> "stcw1978tema20panama.pdf"
										    	);

												foreach ($files_array as $file_title => $file_name) :
										    ?>
												<li><a href="<?php echo $file_url . $file_name; ?>" target="_blank"><?php echo $file_title; ?></a></li>
											<?php endforeach; ?>
										</ol>
									</div>
									<!-- / details-->							
								</div>
							     <img src="http://panamamaritimetraining.com/wp-content/themes/rttheme9/images/1/full_box_bottom.jpg" alt="" class="box_curv">
							</div>
							<!-- /tab content-->
						</div> 
						<!-- /product tabs-->
				</div>
				<div class="clear"></div>
			<?php endif; ?>
  
</div>
<!-- / content -->
<div class="clear"></div>
<!-- / side bar -->
<?php get_footer();?>