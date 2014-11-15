<?php
global $portfolio_temp,$blog_temp,$product_temp;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<meta name="google-site-verification" content="B-SJB6eUdqRyqZpRbx2DCIrCh3r_p-2i9T-NK_Q5pGs" />
<?php if(get_option('rttheme_slider_time_out')){?>
<meta name="rttheme_slider_time_out" content="<?php echo get_option('rttheme_slider_time_out')*1000;?>" />
<?php }else{?>
<meta name="rttheme_slider_time_out" content="5110" />
<?php }?>
<?php if(get_option('rttheme_slider_numbers')){?>
<meta name="rttheme_slider_numbers" content="<?php echo get_option('rttheme_slider_numbers');?>" />
<?php }else{?>
<meta name="rttheme_slider_numbers" content="" />
<?php }?>
<meta name="rttheme_template_dir" content="<?php bloginfo('template_directory'); ?>" />
<?php if(get_option('rttheme_disable_cufon')){?>
<meta name="rttheme_disable_cufon" content="<?php echo get_option('rttheme_disable_cufon');?>" />
<?php }?>
<link href='http://fonts.googleapis.com/css?family=Actor' rel='stylesheet' type='text/css'>

<title><?php if (is_home()) { bloginfo('name'); ?><?php } elseif (is_category() || is_page() ||is_single()) { ?> <?php } ?><?php wp_title(''); ?></title>


<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />


<?php 
if (get_option('rttheme_style')){
	$which_theme=get_option('rttheme_style');
}else{
	$which_theme="1";		
}
?>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/style.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/<?php echo $which_theme;?>/style_cf.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/prettyPhoto.css" media="screen" />
<?php wp_head(); ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-ui-1.5.2.packed.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.easing.1.1.1.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.cycle.all.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.validate.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.form.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/cufon.js"></script>   
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/anivers_400.font.js"></script>   
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/script.js"></script>
<!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/ie6.css" />
<script type='text/javascript' src='<?php bloginfo('template_directory'); ?>/js/dd_belated_png.js'></script>
<script>DD_belatedPNG.fix('.png,#numbers a,.first_ul');</script>
<![endif]-->
</head>
<body>
<!-- header -->
<div id="header">
    <!-- logo -->
            <div id="logo">
		<a href="<?php bloginfo('url'); ?>" title="<?php echo bloginfo('name');?>"><img src="<?php if(get_option('rttheme_logo_url')): echo get_option('rttheme_logo_url'); else:?><?php bloginfo('template_directory'); ?>/images/<?php echo $which_theme;?>/logo.png<?php endif;?>" alt="<?php echo bloginfo('name');?>" class="png" /></a>		
	    	</div>
    <!-- /logo -->
            
        	<div id="slogan">
            <h1>Maritime Training <br />Tailored to you!</h1>
            </div>
            
                        
            <div id="social">
            <!-- social media icons -->
                <?php if (is_user_logged_in() && !is_page('courses')): ?>

                	<a href="<?php echo wp_logout_url( home_url() ); ?>" title="Logout">Logout</a>
                	<a href="<?php echo home_url('courses'); ?>">Go to your Courses</a>

				<?php elseif (is_user_logged_in() && is_page('courses')) : ?>

					<a href="<?php echo wp_logout_url( home_url() ); ?>">Logout</a>
					<a href="<?php echo home_url(); ?>">Back to website</a>

				<?php else : ?>
					<a href="/login/" title="Login">Login</a>

				<?php endif; ?>
             <!-- / social media icons -->
            </div>

    <!-- header right -->
            <div id="header_right">
		<!-- navigation -->
            <?php if (!is_page( 'courses' )) : ?>
				<div id="navigation">
						
					<?php
						$menuVars = array(
							'menu'            => 'RT Theme Main Navigation Menu',  
							'menu_class'      => 'navigation', 
							'menu_id'         => '',
							'container'       => 'div', 
							'container_class' => 'navigation', 
							'container_id'    => 'dropdown_menu', 
							'echo'            => false, 
							'theme_location'  => 'rt-theme-main-menu'
						);
						
						echo wp_nav_menu($menuVars);
					?>
	                                   
				</div>
			<?php endif; ?>
		<!-- / navigation  -->
            </div>
    <!-- /header right -->
</div>
<!-- /header -->

<div id="container1">
<div id="container2">
<div id="container3">    
    <div class="page_curv_top png"></div>
    <div class="content_con png">