<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
 <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/supersized.css" media="screen" />	 

<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css'>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>


<?php 
wp_enqueue_script('jquery');
wp_enqueue_script('superfish', get_stylesheet_directory_uri() .'/js/superfish.js');
//wp_enqueue_script('jqui', get_stylesheet_directory_uri() .'/js/jquery-ui-personalized-1.5.2.packed.js');
//wp_enqueue_script('slides', get_stylesheet_directory_uri() .'/js/slides.min.jquery.js');
wp_enqueue_script('effects', get_stylesheet_directory_uri() .'/js/effects.js');
wp_enqueue_script('supersized', get_stylesheet_directory_uri() .'/js/supersized.3.1.3.min.js');
?>

<?php wp_get_archives('type=monthly&format=link'); ?>
<?php //comments_popup_script(); // off by default ?>

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>


<script type="text/javascript">  
			
	jQuery(function($){
		$.supersized({
				
					//Functionality
					slideshow               :   1,		//Slideshow on/off
					autoplay				:	1,		//Slideshow starts playing automatically
					start_slide             :   1,		//Start slide (0 is random)
					random					: 	0,		//Randomize slide order (Ignores start slide)
					slide_interval          :   5000,	//Length between transitions
					transition              :   1, 		//0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
					transition_speed		:	1000,	//Speed of transition
					new_window				:	1,		//Image links open in new window/tab
					pause_hover             :   0,		//Pause slideshow on hover
					keyboard_nav            :   1,		//Keyboard navigation on/off
					performance				:	1,		//0-Normal, 1-Hybrid speed/quality, 2-Optimizes image quality, 3-Optimizes transition speed // (Only works for Firefox/IE, not Webkit)
					image_protect			:	1,		//Disables image dragging and right click with Javascript
					

					//Size & Position
					min_width		        :   0,		//Min width allowed (in pixels)
					min_height		        :   0,		//Min height allowed (in pixels)
					vertical_center         :   1,		//Vertically center background
					horizontal_center       :   1,		//Horizontally center background
					fit_portrait         	:   1,		//Portrait images will not exceed browser height
					fit_landscape			:   0,		//Landscape images will not exceed browser width
					
					//Components
					navigation              :   1,		//Slideshow controls on/off
					thumbnail_navigation    :   1,		//Thumbnail navigation
					slide_counter           :   1,		//Display slide numbers
					slide_captions          :   1,		//Slide caption (Pull from "title" in slides array)
					slides 					:  	[		//Slideshow Images
												

<?php 
// The Query
query_posts( 'post_type=slides&posts_per_page=-1&orderby=rand' );
$i=0; 
while ( have_posts() ) : the_post();
$simg=get_post_meta($post->ID, 'wtf_slide', true);
if ($i > 0) : echo ','; else: echo ''; endif; //For IE sake add a coma BEFORE every image offsetting the first one.
echo "{image : '".$simg."'}"; 
$i++; 
endwhile;
wp_reset_query();
 ?>	
]
										
}); 
});
</script>
		
<!-- Fanbox Facebook -->
<script type="text/javascript">
	//<!--
	$(document).ready(function() {$(".w2bslikebox").hover(function() {$(this).stop().animate({right: "0"}, "medium");}, function() {$(this).stop().animate({right: "-250"}, "medium");}, 500);});
	//-->
</script>

<style type="text/css">
	.w2bslikebox{background: url("http://aoperativa2/jldecima/wp-content/uploads/2014/05/facebook.png") no-repeat scroll left center transparent !important;display: block;float: right;height: 270px;padding: 0 5px 0 46px;width: 245px;z-index: 99999;position:fixed;right:-250px;top:10%;}
	.w2bslikebox div{border:none;position:relative;display:block;}
	.w2bslikebox span{bottom: 12px;font: 8px "lucida grande",tahoma,verdana,arial,sans-serif;position: absolute;right: 6px;text-align: right;z-index: 99999;}
	.w2bslikebox span a{color: #808080;text-decoration:none;}
	.w2bslikebox span a:hover{text-decoration:underline;}
</style>
<div class="w2bslikebox" style=""><div>
<iframe src="http://www.facebook.com/plugins/likebox.php?href=http://facebook.com/joseluis.decima.94&amp;width=245&amp;colorscheme=light&amp;show_faces=true&amp; connections=9&amp;stream=false&amp;header=false&amp;height=270" scrolling="no" frameborder="0" scrolling="no" style="border: medium none; overflow: hidden; height: 270px; width: 245px;background:#fff;"></iframe></div></div>
<!-- Fanbox Facebook -->

</head>
<body>

<div id="masthead"><!-- masthead begin -->

	<div id="top"> 
		<h1 class="logo">
			<a href="<?php bloginfo('siteurl');?>/" title="<?php bloginfo('name');?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png"/></a>
		</h1>
		
	</div>
	
	<div id="botmenu">
		<?php wp_nav_menu( array( 'container_id' => 'submenu', 'theme_location' => 'primary','menu_class'=>'sfmenu','fallback_cb'=> 'fallbackmenu' ) ); ?>
	</div>
	
</div><!--end masthead-->


