<?php 
add_theme_support( 'post-thumbnails' );

add_action( 'after_setup_theme', 'setup' );
function setup() {
    // ...
     
    add_theme_support( 'post-thumbnails' ); // This feature enables post-thumbnail support for a theme4
    add_image_size( 'custom-size1', 400, 200 ); // 400 pixel wide and 200 pixel tall, resized proportionally
    add_image_size( 'custom-size2', 400, 200, true ); // 400 pixel wide and 200 pixel tall, cropped
     
    // ...
}

	function load_fonts() {
            wp_register_style('et-googleFonts', 'http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,400,700,300');
            wp_enqueue_style( 'et-googleFonts');
        }
    add_action('wp_print_styles', 'load_fonts');



function wpbootstrap_scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'custom-script', get_template_directory_uri() . '/js/bootstrap.js', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_register_script( 'custom-script', get_template_directory_uri() . '/js/jquery-1.11.1.js', array( 'jquery' ) );
		// hakee fade jutun jea
	wp_register_script( 'custom-script', get_template_directory_uri() . '/js/fade.js', array( 'jquery' ) );
		
		
}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );

?>

<?php function twentythirteen_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Main Widget Area' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'oikea' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h3><span class="glyphicon glyphicon-circle-arrow-right"></span>',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Secondary Widget Area' ),
		'id'            => 'sidebar2',
		'description'   => __( 'vasen' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h3><span class="glyphicon glyphicon-circle-arrow-right"></span>',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'twentythirteen_widgets_init' );
?>

<?php // display page numbers on teasers
if (!function_exists('alphaforte_pagination')):
	function alphaforte_pagination() {
		global $wp_query;
		$big = 999999999;		
		echo paginate_links( array(
			'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
			'format' => '?paged=%#%',
			'current' => max(1, get_query_var('paged')),
			'total' => $wp_query->max_num_pages
		));
	}
endif;?>


  <?php           
function excludeCat($query) {
if ( $query->is_home ) {
$query->set('cat', '-3');
}
return $query;
}
add_filter('pre_get_posts', 'excludeCat');

?>

<?php
function alter_attr_wpse_102158($attr) {
  remove_filter('wp_get_attachment_image_attributes','alter_attr_wpse_102158');
  $attr['class'] .= ' new-class';
  return $attr;
}
add_filter('wp_get_attachment_image_attributes','alter_attr_wpse_102158'); 
?>