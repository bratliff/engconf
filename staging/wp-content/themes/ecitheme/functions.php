<?php

//
//  Custom Child Theme Functions
//

// I've included a "commented out" sample function below that'll add a home link to your menu
// More ideas can be found on "A Guide To Customizing The Thematic Theme Framework" 
// http://themeshaper.com/thematic-for-wordpress/guide-customizing-thematic-theme-framework/

// Adds a home link to your menu
// http://codex.wordpress.org/Template_Tags/wp_page_menu
//function childtheme_menu_args($args) {
//    $args = array(
//        'show_home' => 'Home',
//        'sort_column' => 'menu_order',
//        'menu_class' => 'menu',
//        'echo' => true
//    );
//	return $args;
//}
//add_filter('wp_page_menu_args','childtheme_menu_args');

function script_in_head(){ 
?>
<?php if ( is_page() ) { ?>
<script src="http://www.engconf.org/staging/wp-content/themes/ecitheme/toc3.js"></script>
<?php } ?>

<?php if ( is_front_page() ) { ?>
<link rel="stylesheet" href="http://www.engconf.org/staging/wp-content/themes/ecitheme/homestyle.css" type="text/css">
<?php } ?>

<?php }

add_action('wp_head', 'script_in_head');

// Generate footer code
function childtheme_footer($thm_footertext) {
     $date = date('Y');
     $blog_name = get_bloginfo('name');
     $entries_rss = get_bloginfo('rss2_url');
     $thm_footertext = sprintf(
     '<p>&copy; %s %s | 32 Broadway, Suite 314, New York, NY 10004 
| T: 1-212-514-6760 | F: 1-212-514-6030 | E-mail:<a href="mailto:info@engconfintl.org" target="_blank">info@engconfintl.org</a>',
     $date, $blog_name, $admin_url, $entries_rss);
     return $thm_footertext;
     }
add_filter('thematic_footertext', 'childtheme_footer');

// add Meta tags

function child_meta_keywords($description) {
	$keywords  = "\t" . '<meta name="keywords" content="engineering conferences, scientific
conferences, research conferences, technical conferences, biomedical conferences, biotechnology, nanotechnology, materials science, environmental technology, chemical engineering, energy technology" />' . "\n\n";
	$description  = "\t" . '<meta name="description" content="The Engineering Conferences International conducts a leading edge, international scientific engineering conference program." />' . "\n\n";
	$child_meta = $description . $keywords;
	return $child_meta;
}

add_filter ('thematic_create_description','child_meta_keywords');

// Unleash the power of Thematic's dynamic classes
// 
// define('THEMATIC_COMPATIBLE_BODY_CLASS', true);
// define('THEMATIC_COMPATIBLE_POST_CLASS', true);

// Unleash the power of Thematic's comment form
//
// define('THEMATIC_COMPATIBLE_COMMENT_FORM', true);

// Unleash the power of Thematic's feed link functions
//
// define('THEMATIC_COMPATIBLE_FEEDLINKS', true);

?>