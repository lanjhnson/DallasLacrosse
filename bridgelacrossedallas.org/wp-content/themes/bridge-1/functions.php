<?php

/** Start the engine **/
require_once(TEMPLATEPATH.'/lib/init.php');

// Loads favicon from specified URL
add_filter('genesis_pre_load_favicon', 'custom_favicon_filter');
function custom_favicon_filter($favicon_url) {
    $favicon_url = '';
    return $favicon_url;
}

// Image Size 
if ( function_exists( 'add_image_size' ) ) { 
	add_image_size( 'homepage-thumb', 230, 205, false );
}

// CSS JS
add_action('wp_head', 'css_js');
function css_js() { ?>
<!-- include jQuery library -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<!-- include Cycle plugin -->
<script type="text/javascript" src="http://cloud.github.com/downloads/malsup/cycle/jquery.cycle.all.latest.js"></script>
<script type="text/javascript">
jQuery(document).ready(function() {
    jQuery('#slider')
		.after('<div id="slider-nav">') 
		.cycle({ 
			fx:     'fade', 
			speed:  'fast',
			pager:  '#slider-nav' 
		});
});
</script>
<?php }

// Header
add_action('genesis_header', 'custom_header');
function custom_header() { 
	echo '<br class="clear" />';
}

// Remove Navigation
remove_action('genesis_after_header', 'genesis_do_nav');

// Homepage -----------------------------------
add_action('genesis_header', 'homepage');
function homepage() {
	if(is_front_page()) {
		remove_action('genesis_loop', 'genesis_do_loop');
// Slider
add_action('genesis_after_header', 'custom_slider');
function custom_slider() {
	echo '<div id="slider">';
		$slider = new WP_Query(array(
			'nopaging' => 'true',
			'orderby' => 'date',
			'order' => 'ASC',
			'post_type' => 'slider'
		));
		while($slider->have_posts()) : $slider->the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php echo(types_render_field("slider_image", array("width"=>"960","height"=>"300","proportional"=>"true"))); ?>
            <div class="entry-wrap">
                <h3><?php the_title(); ?></h3>
                <div class="entry-content"><?php echo(types_render_field("slider_textfield", array("raw"=>"true"))); ?></div>
                <div class="learn-more"><a href="<?php echo(types_render_field("slider_url", array("raw"=>"true"))); ?>">Learn More</a></div>
            </div>
       </div>
    	<?php endwhile; wp_reset_query();
	echo '</div>';
	echo '<div class="motto"><cite>Mission Statement</cite><blockquote>We enrich nontraditional lacrosse communities by developing after-school programs and building healthy student-athletes.</blockquote><br class="clear" /></div>';
	echo '<div id="featured-posts">';
		$featured_posts = new WP_Query(array(
			'posts_per_page' => '4',
			'orderby' => 'date',
			'order' => 'ASC',
			'post_type' => 'featured-posts'
		));
		while($featured_posts->have_posts()) : $featured_posts->the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php echo(types_render_field("featured_image", array("width"=>"230","height"=>"205","proportional"=>"true"))); ?>
            <h3><?php the_title(); ?></h3>
            <div class="entry-content"><?php echo(types_render_field("featured_textfield", array("raw"=>"true"))); ?></div>
            <div class="learn-more"><a href="<?php echo(types_render_field("featured_url", array("raw"=>"true"))); ?>">Learn More</a></div>
       </div>
    	<?php endwhile; wp_reset_query();
	echo '<br class="clear" /></div>';
	echo '<div class="sponsors"><a href=""><img src="' . CHILD_URL .'/images/sponsors.png" /><br />Special Thank You to All of Our Sponsors.</a></div>';
}
	}
}


// Footer
remove_action('genesis_footer', 'genesis_do_footer');
add_action('genesis_footer','custom_footer');
function custom_footer() { ?>
	<div id="footer">
    	<div class="wrap">
        	<div class="left">
            	<a href="<?php bloginfo('url'); ?>"><img src="<?php echo CHILD_URL; ?>/images/logo-small.png" /></a>
                <p>Copyright <?php the_date('Y'); ?> Bridge Lacrosse Dallas. All Rights Reserved.</p>
        	</div>
        	<div class="right">
            	<div class="social">
                	<a href="" class="facebook">Facebook</a> <a href="" class="twitter">Twitter</a> <a href="" class="linkedin">Linkedin</a> <a href="" class="youtube">Youtube</a> <a href="" class="vimeo">vimeo</a>
                </div>
            	<?php wp_nav_menu( array('menu' => 'Footer' )); ?>
            </div>
    </div>
<?php } 

// Force Page Layout
add_filter('genesis_pre_get_option_site_layout', 'custom_home_layout');
function custom_home_layout($opt) {
    if ( is_home() || is_archive() || is_single() || is_search() )
    $opt = 'content-sidebar';
    return $opt;
}

// Blog
add_action('genesis_header', 'custom_blog');
function custom_blog() { 
	if(is_home()) { 
	}
}