<?php
/*
Template Name: Login Page
*/
get_header(); 
?>

<div class="sub_header">
	
</div>
<div class="content_con2">
	<div class="content sub">

		<?php 
		$args = array(
			'redirect' => site_url('/courses/')
		);

		wp_login_form($args);

		?>
		
	</div>
</div>

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
