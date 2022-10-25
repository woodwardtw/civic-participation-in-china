<?php
/**
 * ACF Stuff
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


function cpcs_publications(){
    $html = '';
    if( have_rows('publications') ):
        $html = "<h2 id='publications'>Publications</h2>";
        // Loop through rows.
        while( have_rows('publications') ) : the_row();

            // Load sub field value.
            $pub = get_sub_field('publication_information');
            // Do something...
            $html .= "<div class='publication'>{$pub}</div>";
        // End loop.
        endwhile;
        return $html;
        // No value.
        else :
            // Do something...
        endif;

    
}


//save acf json
add_filter('acf/settings/save_json', 'cpcs_json_save_point');
 
function cpcs_json_save_point( $path ) {
    
    // update path
    $path = get_stylesheet_directory() . '/acf-json'; //replace w get_stylesheet_directory() for theme
    
    
    // return
    return $path;
    
}


// load acf json
add_filter('acf/settings/load_json', 'cpcs_json_load_point');

function cpcs_json_load_point( $paths ) {
    
    // remove original path (optional)
    unset($paths[0]);
    
    
    // append path
    $paths[] = get_stylesheet_directory()  . '/acf-json';//replace w get_stylesheet_directory() for theme
    
    
    // return
    return $paths;
    
}