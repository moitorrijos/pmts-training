</div>
</div>
</div>                                          
</div>
<!-- footer -->
	<div id="footer">
            <div class="footer_con"> <div class="footer_con2">
                <!-- copyright text -->
                <div class="part1">
                        Copyright © 1998 - <?php echo date('Y'); ?> Panama Maritime Training Services, Inc.                
                </div>
                <!-- social media icons -->
                
                <!-- links -->
                <div class="part3">
				<?php
				if (!function_exists('wp_nav_menu') || get_option("rttheme_wp_menu")):?>

					<?php
					//footer pages
					if (get_option('rttheme_footer_pages[]')) 
						$footer_pages = get_pages(array('sort_column'=>'menu_order', 'include' =>get_option('rttheme_footer_pages[]') ,'child_of' => 0));
						if ($footer_pages ):
					?>			
						<?php $my_i="1";foreach ($footer_pages as $footer_page_list) { ?>
							 <a  href="<?php echo get_permalink($footer_page_list->ID);?>" title="<?php echo $footer_page_list ->post_title?>"><?php echo ucwords(strtolower($footer_page_list ->post_title)) ?></a> 
							 <?php if(count($footer_pages)!=$my_i):?>| <?php endif;?>
						<?php $my_i++;} 
						endif;
					?>				    
				<?php else://if wp version supports wp menus - since WP 3.0?>	
				
					<?php
					
					//find first a tag and add id
					function add_class_footer($output){
					     
					    $bul="a href";
					    $degistir="a class=\"footer_first\" href";
					    return preg_replace('/'.$bul.'/', $degistir, $output, 1); 			
					     
					}
					
					//footer menu parameters
					$footer_menu=array(
					    'menu' => 'RT Theme Footer Navigation Menu',
					    'depth'=> 1,
					    'echo' => false,
					    'menu_class'      => 'footer', 
					    'menu_id'         => '',
					    'container'       => '', 
					    'container_class' => '', 
					    'container_id'    => '', 
					    'fallback_cb' => ''
					);
					
					add_filter('wp_nav_menu', 'add_class_footer');
    
					echo wp_nav_menu($footer_menu);				    
					?>
				<?php endif;?>   
                </div>
           </div></div>
	</div>
<!-- /footer -->
</div>
<?php wp_footer();?>
<?php echo get_option('rttheme_anayltics');?>
</body>
</html>