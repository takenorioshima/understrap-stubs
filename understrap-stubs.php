<?php
/**
 * Generated stub declarations for Understrap.
 * https://github.com/understrap/understrap
 */

/**
 * WP_Bootstrap_Navwalker class.
 *
 * @extends Walker_Nav_Menu
 */
class Understrap_WP_Bootstrap_Navwalker extends \Walker_Nav_Menu
{
    /**
     * Starts the list before the elements are added.
     *
     * @since WP 3.0.0
     *
     * @see Walker_Nav_Menu::start_lvl()
     *
     * @param string   $output Used to append additional content (passed by reference).
     * @param int      $depth  Depth of menu item. Used for padding.
     * @param stdClass $args   An object of wp_nav_menu() arguments.
     */
    public function start_lvl(&$output, $depth = 0, $args = array())
    {
    }
    /**
     * Starts the element output.
     *
     * @since WP 3.0.0
     * @since WP 4.4.0 The {@see 'nav_menu_item_args'} filter was added.
     *
     * @see Walker_Nav_Menu::start_el()
     *
     * @param string   $output Used to append additional content (passed by reference).
     * @param WP_Post  $item   Menu item data object.
     * @param int      $depth  Depth of menu item. Used for padding.
     * @param stdClass $args   An object of wp_nav_menu() arguments.
     * @param int      $id     Current item ID.
     */
    public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    {
    }
    /**
     * Traverse elements to create list from elements.
     *
     * Display one element if the element doesn't have any children otherwise,
     * display the element and its children. Will only traverse up to the max
     * depth and no ignore elements under that depth. It is possible to set the
     * max depth to include all depths, see walk() method.
     *
     * This method should not be called directly, use the walk() method instead.
     *
     * @since WP 2.5.0
     *
     * @see Walker::start_lvl()
     *
     * @param object $element           Data object.
     * @param array  $children_elements List of elements to continue traversing (passed by reference).
     * @param int    $max_depth         Max depth to traverse.
     * @param int    $depth             Depth of current element.
     * @param array  $args              An array of arguments.
     * @param string $output            Used to append additional content (passed by reference).
     */
    public function display_element($element, &$children_elements, $max_depth, $depth, $args, &$output)
    {
    }
    /**
     * Menu Fallback
     * =============
     * If this function is assigned to the wp_nav_menu's fallback_cb variable
     * and a menu has not been assigned to the theme location in the WordPress
     * menu manager the function with display nothing to a non-logged in user,
     * and will add a link to the WordPress menu manager if logged in as an admin.
     *
     * @param array $args passed from the wp_nav_menu function.
     */
    public static function fallback($args)
    {
    }
    /**
     * Find any custom linkmod or icon classes and store in their holder
     * arrays then remove them from the main classes array.
     *
     * Supported linkmods: .disabled, .dropdown-header, .dropdown-divider, .sr-only
     * Supported iconsets: Font Awesome 4/5, Glypicons
     *
     * NOTE: This accepts the linkmod and icon arrays by reference.
     *
     * @since 4.0.0
     *
     * @param array   $classes         an array of classes currently assigned to the item.
     * @param array   $linkmod_classes an array to hold linkmod classes.
     * @param array   $icon_classes    an array to hold icon classes.
     * @param integer $depth           an integer holding current depth level.
     *
     * @return array  $classes         a maybe modified array of classnames.
     */
    private function seporate_linkmods_and_icons_from_classes($classes, &$linkmod_classes, &$icon_classes, $depth)
    {
    }
    /**
     * Return a string containing a linkmod type and update $atts array
     * accordingly depending on the decided.
     *
     * @since 4.0.0
     *
     * @param array $linkmod_classes array of any link modifier classes.
     *
     * @return string                empty for default, a linkmod type string otherwise.
     */
    private function get_linkmod_type($linkmod_classes = array())
    {
    }
    /**
     * Update the attributes of a nav item depending on the limkmod classes.
     *
     * @since 4.0.0
     *
     * @param array $atts            array of atts for the current link in nav item.
     * @param array $linkmod_classes an array of classes that modify link or nav item behaviors or displays.
     *
     * @return array                 maybe updated array of attributes for item.
     */
    private function update_atts_for_linkmod_type($atts = array(), $linkmod_classes = array())
    {
    }
    /**
     * Wraps the passed text in a screen reader only class.
     *
     * @since 4.0.0
     *
     * @param string $text the string of text to be wrapped in a screen reader class.
     * @return string      the string wrapped in a span with the class.
     */
    private function wrap_for_screen_reader($text = '')
    {
    }
    /**
     * Returns the correct opening element and attributes for a linkmod.
     *
     * @since 4.0.0
     *
     * @param string $linkmod_type a sting containing a linkmod type flag.
     * @param string $attributes   a string of attributes to add to the element.
     *
     * @return string              a string with the openign tag for the element with attribibutes added.
     */
    private function linkmod_element_open($linkmod_type, $attributes = '')
    {
    }
    /**
     * Return the correct closing tag for the linkmod element.
     *
     * @since 4.0.0
     *
     * @param string $linkmod_type a string containing a special linkmod type.
     *
     * @return string              a string with the closing tag for this linkmod type.
     */
    private function linkmod_element_close($linkmod_type)
    {
    }
}
/**
 * Count number of visible widgets in a sidebar and add classes to widgets accordingly,
 * so widgets can be displayed one, two, three or four per row.
 *
 * @global array $sidebars_widgets
 *
 * @param array $params {
 *     Parameters passed to a widget’s display callback.
 *
 *     @type array $args  {
 *         An array of widget display arguments.
 *
 *         @type string $name          Name of the sidebar the widget is assigned to.
 *         @type string $id            ID of the sidebar the widget is assigned to.
 *         @type string $description   The sidebar description.
 *         @type string $class         CSS class applied to the sidebar container.
 *         @type string $before_widget HTML markup to prepend to each widget in the sidebar.
 *         @type string $after_widget  HTML markup to append to each widget in the sidebar.
 *         @type string $before_title  HTML markup to prepend to the widget title when displayed.
 *         @type string $after_title   HTML markup to append to the widget title when displayed.
 *         @type string $widget_id     ID of the widget.
 *         @type string $widget_name   Name of the widget.
 *     }
 *     @type array $widget_args {
 *         An array of multi-widget arguments.
 *
 *         @type int $number Number increment used for multiples of the same widget.
 *     }
 * }
 * @return array $params
 */
function understrap_widget_classes($params)
{
}
/**
 * Initializes themes widgets.
 */
function understrap_widgets_init()
{
}
/**
 * Add site info hook to WP hook library.
 */
function understrap_site_info()
{
}
/**
 * Add site info content.
 */
function understrap_add_site_info()
{
}
/**
 * Adds support for wp.com-specific theme functions.
 *
 * @global array $themecolors
 */
function understrap_wpcom_setup()
{
}
/**
 * WordPress.com-specific styles
 */
function understrap_wpcom_styles()
{
}
/**
 * Displays the navigation to next/previous set of posts.
 *
 * @param string|array $args {
 *     (Optional) Array of arguments for generating paginated links for archives.
 *
 *     @type string $base               Base of the paginated url. Default empty.
 *     @type string $format             Format for the pagination structure. Default empty.
 *     @type int    $total              The total amount of pages. Default is the value WP_Query's
 *                                      `max_num_pages` or 1.
 *     @type int    $current            The current page number. Default is 'paged' query var or 1.
 *     @type string $aria_current       The value for the aria-current attribute. Possible values are 'page',
 *                                      'step', 'location', 'date', 'time', 'true', 'false'. Default is 'page'.
 *     @type bool   $show_all           Whether to show all pages. Default false.
 *     @type int    $end_size           How many numbers on either the start and the end list edges.
 *                                      Default 1.
 *     @type int    $mid_size           How many numbers to either side of the current pages. Default 2.
 *     @type bool   $prev_next          Whether to include the previous and next links in the list. Default true.
 *     @type bool   $prev_text          The previous page text. Default '&laquo;'.
 *     @type bool   $next_text          The next page text. Default '&raquo;'.
 *     @type string $type               Controls format of the returned value. Possible values are 'plain',
 *                                      'array' and 'list'. Default is 'array'.
 *     @type array  $add_args           An array of query args to add. Default false.
 *     @type string $add_fragment       A string to append to each link. Default empty.
 *     @type string $before_page_number A string to appear before the page number. Default empty.
 *     @type string $after_page_number  A string to append after the page number. Default empty.
 *     @type string $screen_reader_text Screen reader text for the nav element. Default 'Posts navigation'.
 * }
 * @param string       $class           (Optional) Classes to be added to the <ul> element. Default 'pagination'.
 */
function understrap_pagination($args = array(), $class = 'pagination')
{
}
/**
 * Declares WooCommerce theme support.
 */
function understrap_woocommerce_support()
{
}
/**
 * Display the theme specific start of the page wrapper.
 */
function understrap_woocommerce_wrapper_start()
{
}
/**
 * Display the theme specific end of the page wrapper.
 */
function understrap_woocommerce_wrapper_end()
{
}
/**
 * Filter hook function monkey patching form classes
 * Author: Adriano Monecchi http://stackoverflow.com/a/36724593/307826
 *
 * @param string $args Form attributes.
 * @param string $key Not in use.
 * @param null   $value Not in use.
 *
 * @return mixed
 */
function understrap_wc_form_field_args($args, $key, $value = \null)
{
}
/**
 * Check if reviews are enabled.
 *
 * Function introduced in WooCommerce 3.6.0., include it for backward compatibility.
 *
 * @return bool
 */
function wc_reviews_enabled()
{
}
/**
 * Check if reviews ratings are enabled.
 *
 * Function introduced in WooCommerce 3.6.0., include it for backward compatibility.
 *
 * @return bool
 */
function wc_review_ratings_enabled()
{
}
/**
 * Add Bootstrap class to quantity input field.
 *
 * @param array $classes Array of quantity input classes.
 * @return array
 */
function understrap_quantity_input_classes($classes)
{
}
/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 *
 * @return array
 */
function understrap_body_classes($classes)
{
}
/**
 * Replaces logo CSS class.
 *
 * @param string $html Markup.
 *
 * @return string
 */
function understrap_change_logo_class($html)
{
}
/**
 * Add a pingback url auto-discovery header for single posts of any post type.
 */
function understrap_pingback()
{
}
/**
 * Add mobile-web-app meta.
 */
function understrap_mobile_web_app_meta()
{
}
/**
 * Adds schema markup to the body element.
 *
 * @param array $atts An associative array of attributes.
 * @return array
 */
function understrap_default_body_attributes($atts)
{
}
/**
 * Escapes the description for an author or post type archive.
 *
 * @param string $description Archive description.
 * @return string Maybe escaped $description.
 */
function understrap_escape_the_archive_description($description)
{
}
/**
 * Sanitizes data for allowed HTML tags for post title.
 *
 * @param string $data Post title to filter.
 * @return string Filtered post title with allowed HTML tags and attributes intact.
 */
function understrap_kses_title($data)
{
}
/**
 * Hides the posted by markup in `understrap_posted_on()`.
 *
 * @param string $byline Posted by HTML markup.
 * @return string Maybe filtered posted by HTML markup.
 */
function understrap_hide_posted_by($byline)
{
}
/**
 * Removes the ... from the excerpt read more link
 *
 * @param string $more The excerpt.
 *
 * @return string
 */
function understrap_custom_excerpt_more($more)
{
}
/**
 * Adds a custom read more link to all excerpts, manually or automatically generated
 *
 * @param string $post_excerpt Posts's excerpt.
 *
 * @return string
 */
function understrap_all_excerpts_get_more_link($post_excerpt)
{
}
/**
 * Load theme's JavaScript and CSS sources.
 */
function understrap_scripts()
{
}
/**
 * Register basic customizer support.
 *
 * @param object $wp_customize Customizer reference.
 */
function understrap_customize_register($wp_customize)
{
}
/**
 * Register individual settings through customizer's API.
 *
 * @param WP_Customize_Manager $wp_customize Customizer reference.
 */
function understrap_theme_customize_register($wp_customize)
{
}
/**
 * Setup JS integration for live previewing.
 */
function understrap_customize_preview_js()
{
}
/**
 * Setup JS integration for live previewing.
 */
function understrap_customize_controls_js()
{
}
/**
 * Overrides the responsive navbar type for Bootstrap 4
 *
 * @param string $current_mod
 * @return string
 */
function understrap_default_navbar_type($current_mod)
{
}
/**
 * Registers an editor stylesheet for the theme.
 */
function understrap_wpdocs_theme_add_editor_styles()
{
}
/**
 * Reveals TinyMCE's hidden Style dropdown.
 *
 * @param array $buttons Array of Tiny MCE's button ids.
 * @return array
 */
function understrap_tiny_mce_style_formats($buttons)
{
}
/**
 * Adds style options to TinyMCE's Style dropdown.
 *
 * @param array $settings TinyMCE settings array.
 * @return array
 */
function understrap_tiny_mce_before_init($settings)
{
}
/**
 * Removes the blockquote button from the TinyMCE toolbar.
 *
 * We provide the blockquote via the style formats. Using the style formats
 * blockquote receives the proper Bootstrap classes.
 *
 * @see understrap_tiny_mce_before_init()
 *
 * @param array $buttons TinyMCE buttons array.
 * @return array TinyMCE buttons array without the blockquote button.
 */
function understrap_tiny_mce_blockquote_button($buttons)
{
}
/**
 * Set up custom header feature.
 */
function understrap_custom_header_setup()
{
}
/**
 * Sets up our default theme support for the WordPress block editor.
 */
function understrap_block_editor_setup()
{
}
/**
 * Checks for our JSON file of color values. If exists, creates a color palette array.
 *
 * @return array|bool
 */
function understrap_generate_color_palette()
{
}
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function understrap_setup()
{
}
/**
 * Jetpack setup function.
 *
 * @link https://jetpack.me/support/infinite-scroll/
 * @link https://jetpack.me/support/responsive-videos/
 * @link https://jetpack.me/support/social-menu/
 */
function understrap_components_jetpack_setup()
{
}
/**
 * Custom render function for Infinite Scroll.
 */
function understrap_components_infinite_scroll_render()
{
}
/**
 * Display Jetpack's social menu if available.
 * Avoids fatal errors if Jetpack isn’t activated.
 */
function understrap_components_social_menu()
{
}
/**
 * Store default theme settings in database.
 */
function understrap_setup_theme_default_settings()
{
}
/**
 * Retrieve default theme settings.
 *
 * @return array
 */
function understrap_get_theme_default_settings()
{
}
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function understrap_posted_on()
{
}
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function understrap_entry_footer()
{
}
/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function understrap_categorized_blog()
{
}
/**
 * Flush out the transients used in understrap_categorized_blog.
 */
function understrap_category_transient_flusher()
{
}
/**
 * Displays the attributes for the body element.
 */
function understrap_body_attributes()
{
}
/**
 * Displays the comment navigation.
 *
 * @param string $nav_id The ID of the comment navigation.
 */
function understrap_comment_navigation($nav_id)
{
}
/**
 * Displays the edit post link for post.
 */
function understrap_edit_post_link()
{
}
/**
 * Display navigation to next/previous post when applicable.
 */
function understrap_post_nav()
{
}
/**
 * Displays/retrieves page links for paginated posts (i.e. including the
 * `<!--nextpage-->` Quicktag one or more times). This tag must be
 * within The Loop. Default: echo.
 *
 * @return void|string Formatted output in HTML.
 */
function understrap_link_pages()
{
}
/**
 * Add Bootstrap classes to WP's comment form default fields.
 *
 * @param array $fields {
 *     Default comment fields.
 *
 *     @type string $author  Comment author field HTML.
 *     @type string $email   Comment author email field HTML.
 *     @type string $url     Comment author URL field HTML.
 *     @type string $cookies Comment cookie opt-in field HTML.
 * }
 *
 * @return array
 */
function understrap_bootstrap_comment_form_fields($fields)
{
}
/**
 * Adds Bootstrap classes to comment form submit button and comment field.
 *
 * @param string[] $args Comment form arguments and fields.
 *
 * @return string[]
 */
function understrap_bootstrap_comment_form($args)
{
}
/**
 * Displays a note that comments are closed if comments are closed and there are comments.
 */
function understrap_comment_form_comments_closed()
{
}
/**
 * Setup body classes.
 *
 * @param array $classes CSS classes.
 *
 * @deprecated 0.9.4 Styling of tag has been removed in Bootstrap v4 Alpha 6.
 * @link https://github.com/twbs/bootstrap/issues/20939
 */
function understrap_adjust_body_class($classes)
{
}
/**
 * Count number of widgets in a sidebar
 * Used to add classes to widget areas so widgets can be displayed one, two, three or four per row
 *
 * @param int $sidebar_id The ID of the sidebar.
 * @deprecated 0.8.9
 */
function understrap_slbd_count_widgets($sidebar_id)
{
}
/**
 * This function has never existed in any of the templates. It serves to extract
 * strings for translations which have been removed or changed and may still be
 * be present in child themes. The corresponding translations are not maintained.
 */
function deprecated_translations()
{
}
