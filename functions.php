<?php


// Add theme support

add_theme_support('post-thumbnails');

add_theme_support('title-tag');

add_theme_support('page-template');

add_theme_support('category');

add_post_type_support('post', 'thumbnail');

add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));

add_image_size('testimonials',100000,620, false);

add_theme_support( 'post-thumbnails' );


function add_custom_sizes() {
    add_image_size('page-banner',99999999,450,true);

}
add_action('after_setup_theme','add_custom_sizes');

function clm_register_menus()
{
    register_nav_menus(array(

        'main' => __('Main Navigation'),
        'footer1'=>__('Footer Navigation1'),
        'footer2'=>__('Footer Navigation2')
    ));
}

add_action('init', 'clm_register_menus');
 

function clm_main_nav()
{
    wp_nav_menu(array(
        'container' => 'ul', // remove nav container
        'menu' => 'Main Navigation', // nav name
        'menu_id' => '', // custom id
        'menu_class' => 'nav', // custom class
        'items_wrap' => '<ul class="nav">%3$s</ul>',
        'theme_location' => 'main', // where it's located in the theme
        'before' => '', // before the menu
        'after' => '', // after the menu
        'link_before' => '', // before each link
        'link_after' => '', // after each link
        'depth' => 3                          // set to 1 to disable dropdowns
    ));
}





function clm_footer1_nav()
{
    wp_nav_menu(array(
        'container' => false, // remove nav container
        'menu' => 'Footer Navigation1', // nav name
        'menu_id' => '', // custom id
        'menu_class' => 'nav', // custom class
        'theme_location' => 'footer1', // where it's located in the theme
        'before' => '', // before the menu
        'after' => '', // after the menu
        'link_before' => '', // before each link
        'link_after' => '', // after each link
        'depth' => 3
    ));
}






// Option page
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => 'Site Settings',
        'menu_title' => 'Site Settings',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
}





function add_menu_atts($atts, $item, $args){

    // your check for primary menu location

    if( $args->theme_location == 'footer1' || $args->theme_location == 'main') {


      $atts['class'] = "menu-item";

   

    }
  

    return $atts;

  }


  add_filter('nav_menu_link_attributes', 'add_menu_atts', 10, 3);



add_filter('mime_types', 'dd_add_jfif_files');

function dd_add_jfif_files($mimes){
    $mimes['jfif'] = "image/jpeg";
    return $mimes;
}


/*removing default submit tag*/
remove_action('wpcf7_init', 'wpcf7_add_form_tag_submit');


/*adding action with function which handles our button markup*/
add_action('wpcf7_init', 'twentysixteen_child_cf7_button');

/*adding out submit button tag*/
if (!function_exists('twentysixteen_child_cf7_button')) {
    function twentysixteen_child_cf7_button() {
    wpcf7_add_form_tag('submit', 'twentysixteen_child_cf7_button_handler');
    }
    }


    /*out button markup inside handler*/
if (!function_exists('twentysixteen_child_cf7_button_handler')) {
    function twentysixteen_child_cf7_button_handler($tag) {
    $tag = new WPCF7_FormTag($tag);
    $class = wpcf7_form_controls_class($tag->type);
    $atts = array();

    $atts['class'] = $tag->get_class_option($class);
    $atts['class'] .= ' twentysixteen-child-custom-btn';
    $atts['id'] = $tag->get_id_option();
    $atts['tabindex'] = $tag->get_option('tabindex', 'int', true);
    $value = isset($tag->values[0]) ? $tag->values[0] : '';
    if (empty($value)) {
    $value = esc_html__('Contact Us', 'twentysixteen');
    }
    $atts['type'] = 'submit';
    $atts = wpcf7_format_atts($atts);

    $contact_form = WPCF7_ContactForm::get_current();
    $contact_form_id = $contact_form -> id;
  
    if($contact_form_id=='21'){
    $html = sprintf('<button style="border:0;box-shadow:none;padding:0;"><a class="btn btn-primary">%2$s</a></button>', $atts, $value);
}else{
    $html = sprintf('<button  class="btn-with-circle-arw" type="submit" value="Subscribe">%2$s</button>', $atts, $value);
}
    return $html;
    }
    }

    
/**
 * main menu custom nav walker
 */
class revealize_menu_walker extends Walker_Nav_Menu {

  
	function start_lvl(&$output, $depth = 0, $args = array()) {
	  $indent = str_repeat("\t", $depth);
	  $output .= "\n$indent<ul class=\"dropdown-menu\" aria-labelledby='navbarDropdown'>\n";
	}
  
	function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
  
	  global $wp_query;

	  $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
  
	  $class_names = $value = '';
  
	  $classes = empty( $item->classes ) ? array() : (array) $item->classes;
	  
  
	  // adding class  to parent and child li item 
	  if(in_array('menu-item-has-children', $classes ) && $depth != 0){
		$class_names = ' class="nav-item dropdown-submenu'. '"';
	  }elseif(in_array('menu-item-has-children', $classes )) {
		$class_names = ' class="nav-item dropdown'. '"';
	  }
	  else {
		$class_names = ' class="nav-item' . '"';
	  }

	  $output .= $indent . '<li' . $value . $class_names .'>';
  
	  $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
	  $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
	  $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
	  $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
  
	  $item_output = $args->before;
  
	 // adding class to  parent and child a tag
	  if(in_array('menu-item-has-children', $classes ) && $depth == 0) {
	  $item_output .= '<a'. $attributes .' class="'.((in_array("current_page_item",$item->classes))?'active ':"").'nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">';
	  }
	  elseif($depth == 0){
		$item_output .= '<a'. $attributes .' class="'.((in_array("current_page_item",$item->classes))?'active ':"").'nav-link">';
	  }elseif(in_array('menu-item-has-children', $classes )) {
			$item_output .= '<a'. $attributes .' class="'.((in_array("current_page_item",$item->classes))?'active ':"").'dropdown-item dropdown-toggle">';
	  }
		else{
		$item_output .= '<a'. $attributes .' class="'.((in_array("current_page_item",$item->classes))?'active ':"").'dropdown-item ">';
	  }

	  $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
	  $item_output .= '</a>';
	  $item_output .= $args->after;
  
	  $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
  
	}


  }


  
  function excerpt($limit) {
    $excerpt = explode(' ', get_the_excerpt(), $limit);

    if (count($excerpt) >= $limit) {
        array_pop($excerpt);
        $excerpt = implode(" ", $excerpt) . '...';
    } else {
        $excerpt = implode(" ", $excerpt);
    }

    $excerpt = preg_replace('`\[[^\]]*\]`', '', $excerpt);

    return $excerpt;
}

function content($limit) {
  $content = explode(' ', get_the_content(), $limit);

  if (count($content) >= $limit) {
      array_pop($content);
      $content = implode(" ", $content) . '...';
  } else {
      $content = implode(" ", $content);
  }

  $content = preg_replace('/\[.+\]/','', $content);
  $content = apply_filters('the_content', $content); 
  $content = str_replace(']]>', ']]&gt;', $content);

  return $content;
}