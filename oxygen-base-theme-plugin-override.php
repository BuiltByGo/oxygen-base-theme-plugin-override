<?php
/*
 * Plugin Name: WooCommerce Boodil Payments
 * Plugin URI: https://github.com/BuiltByGo/oxygen-template-override-plugin
 * Description: Code to activate template overrides whilst using Oxygen
 * Author: BuiltByGo
 * Author URI: https://builtbygo.com
 * Version: 1.0.0
 * Text Domain: oxygen-base-theme-plugin-override
 */

remove_filter( 'template', 'ct_oxygen_template_name' );
remove_filter( 'template_directory', 'ct_disable_theme_load', 1, 1 );
remove_filter( 'stylesheet_directory', 'ct_disable_theme_load', 1, 1 );
