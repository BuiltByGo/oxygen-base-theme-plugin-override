/*
 * BBG - Code to activate template overrides whilst useing Oxygen
 */

remove_filter( 'template', 'ct_oxygen_template_name' );
remove_filter( 'template_directory', 'ct_disable_theme_load', 1, 1 );
remove_filter( 'stylesheet_directory', 'ct_disable_theme_load', 1, 1 );