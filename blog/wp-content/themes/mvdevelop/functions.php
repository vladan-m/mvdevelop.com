<?php
add_theme_support( 'nav-menus' );
add_action( 'init', 'register_my_menus' );
add_post_type_support( 'page', 'excerpt' );
add_theme_support('post-thumbnails');

// Disqus: Prevent from replacing comment count
remove_filter('comments_number', 'dsq_comments_text');
remove_filter('get_comments_number', 'dsq_comments_number');
remove_action('loop_end', 'dsq_loop_end');

//remove class from feature image
function the_post_thumbnail_remove_class($output) {
  $output = preg_replace('/class=".*?"/', '', $output);
  return $output;
}
add_filter('post_thumbnail_html', 'the_post_thumbnail_remove_class');

// add title attribute to feature image
add_filter('wp_get_attachment_image_attributes', 'feature_image_title', 10, 2);
function feature_image_title($attr, $attachment = null){
  $attr['title'] = get_post($attachment->ID)->post_title;
  return $attr;
}

function register_my_menus() {
  register_nav_menus(
    array(
        'primary' => __( 'Primary Navigation', 'twentyten' ),
        'secondary' => __( 'Secondary Navigation', 'twentyten' )
    )
  );
}

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
  if( in_array('current-menu-item', $classes) ){
    $classes[] = 'active ';
  }
  return $classes;
}

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

if ( function_exists('register_sidebar') )
register_sidebar(array('name'=>'left_sidebar',
  'before_widget' => '<div class="sidebar-holder">',
  'after_widget' => '</div></div>',
  'before_title' => '<div class="sidebar-title"><h4>',
  'after_title' => '</h4></div><div class="sidebar-box">',
));

register_sidebar(array('name'=>'right_sidebar',
  'before_widget' => '<div class="sidebar-holder">',
  'after_widget' => '</div></div>',
  'before_title' => '<div class="sidebar-title"><h4>',
  'after_title' => '</h4></div><div class="sidebar-box">',
));

register_sidebar(array('name'=>'Footer 1',
  'before_widget' => '<div class="footer-widget">',
  'after_widget' => '</div></div>',
  'before_title' => '<h4>',
  'after_title' => '</h4><div class="footer-box clearfix">',
));

register_sidebar(array('name'=>'Footer 2',
  'before_widget' => '<div class="footer-widget">',
  'after_widget' => '</div></div>',
  'before_title' => '<h4>',
  'after_title' => '</h4><div class="footer-box clearfix">',
));

register_sidebar(array('name'=>'Footer 3',
  'before_widget' => '<div class="footer-widget">',
  'after_widget' => '</div></div>',
  'before_title' => '<h4>',
  'after_title' => '</h4><div class="footer-box clearfix">',
));

register_sidebar(array('name'=>'Footer 4',
  'before_widget' => '<div class="footer-widget">',
  'after_widget' => '</div></div>',
  'before_title' => '<h4>',
  'after_title' => '</h4><div class="footer-box clearfix">',
));

add_action( 'show_user_profile', 'my_show_extra_profile_fields' );
add_action( 'edit_user_profile', 'my_show_extra_profile_fields' );

function my_show_extra_profile_fields( $user ) { ?>

  <h3>Social profiles</h3>

  <table class="form-table">

    <tr>
      <th><label for="twitter">Twitter</label></th>

      <td>
        <input type="text" name="twitter" id="twitter" value="<?php echo esc_attr( get_the_author_meta( 'twitter', $user->ID ) ); ?>" class="regular-text" /><br />
        <span class="description">Please enter your Twitter URL.</span>
      </td>
    </tr>
    <tr>
      <th><label for="twitter">Facebook</label></th>

      <td>
        <input type="text" name="facebook" id="facebook" value="<?php echo esc_attr( get_the_author_meta( 'facebook', $user->ID ) ); ?>" class="regular-text" /><br />
        <span class="description">Please enter your Facebook URL.</span>
      </td>
    </tr>

  </table>
<?php }

add_action( 'personal_options_update', 'my_save_extra_profile_fields' );
add_action( 'edit_user_profile_update', 'my_save_extra_profile_fields' );

function my_save_extra_profile_fields( $user_id ) {

  if ( !current_user_can( 'edit_user', $user_id ) )
    return false;

  /* Copy and paste this line for additional fields. Make sure to change 'twitter' to the field ID. */
  update_usermeta( $user_id, 'twitter', $_POST['twitter'] );
  update_usermeta( $user_id, 'facebook', $_POST['facebook'] );
}

?>
