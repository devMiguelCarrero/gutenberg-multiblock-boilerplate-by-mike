<?php
/*
Plugin Name: Gutenberg Multiblock Boilerplate By Mike
Plugin URI: #
Description: Plugin made for Easy Esports Manger Theme correct functioning
Version: 1.2
Author: devMiguelCarrero
Author URI: #
License: OSLv3
Requires at least: 4.0
Text Domain: gutenberg-multiblock-boilerplate-by-mike
Domain Path: /gutenberg-multiblock-boilerplate-by-mike/
*/

/* Copyright 2022
This program is free licensed software (MIT); 
*/

//error_reporting(E_ALL);
//ini_set("display_errors", 1); 

if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

define( 'GMB_TEXTDOMAIN' , 'gutenberg-multiblock-boilerplate-by-mike' );
define( 'GMB_VERSION' , '1.0' );
define( 'GMB_SITE_URL', get_site_url() . '/' );
define( 'GMB_ACHIEVEMENTS_PATH' , plugin_dir_path( __FILE__ ) . DIRECTORY_SEPARATOR );
define( 'GMB_PLUGIN_URL' , plugin_dir_url( __FILE__ ) . DIRECTORY_SEPARATOR );
define( 'GMB_INCLUDES_PATH', GMB_ACHIEVEMENTS_PATH . 'includes' . DIRECTORY_SEPARATOR );
define( 'GMB_APPLICATION_PATH', GMB_INCLUDES_PATH . 'application' . DIRECTORY_SEPARATOR );
define( 'GMB_ENQUEUE_PATH', GMB_APPLICATION_PATH . 'enqueue' . DIRECTORY_SEPARATOR );
define( 'GMB_BLOCKS_PATH', GMB_APPLICATION_PATH . 'blocks' . DIRECTORY_SEPARATOR );
define( 'GMB_CONFIG_PATH', GMB_INCLUDES_PATH . 'config' . DIRECTORY_SEPARATOR );
define( 'GMB_BUILD_PATH', GMB_ACHIEVEMENTS_PATH . 'build' . DIRECTORY_SEPARATOR );
define( 'GMB_BUILD_URL', GMB_PLUGIN_URL . 'build' . '/' );

require_once( GMB_INCLUDES_PATH . 'gutenberg-multiblock-boilerplate-by-mike-install.php' );