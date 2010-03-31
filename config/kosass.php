<?php defined('SYSPATH') or die('No direct script access.');

return array
(
	/**
	 * Debug mode?
	 *
	 * DEFAULT: FALSE
	 */
	'debug' => FALSE,

	/**
	 * Base folder for sass files
	 *
	 * DEFAULT: views
	 */
	'base_folder' => 'views',

	/**
	 * Sub folder for sass files
	 *
	 * DEFAULT: sass
	 */
	'sub_folder' => 'sass',

	/**
	 * Sass cache folder
	 *
	 * DEFAULT: APPPATH.'cache/sass'
	 */
	'cache_folder' => APPPATH.'cache/kosass',

	/**
	 * Web accessible css folder
	 *
	 * DEFAULT: DOCROOT.'media/css'
	 */
	'output_folder' => DOCROOT.'media/css',

	/**
	 * Single or double quotes for wrapping attribute values
	 *
	 * DEFAULT: 'double'
	 */
	'quotes' => 'double',

	/**
	 * Default sass extension to look for
	 *
	 * DEFAULT: haml
	 */
	'ext' => 'sass',

	/**
	 * Number of seconds between cache and template. If template modified time is
	 * more than # seconds different from cache, regenerator cache.
	 *
	 * DEFAULT: 5
	 */
	'cache_time' => 5,

	/**
	 * How long to keep cached templates. Default is one month. Good for removing
	 * view templates that are no longer being used.
	 *
	 * DEFAULT: 2592000
	 */
	'cache_clean_time' => 2592000,

	/**
	 * Define gc probability. Default is 30. So 1/30 is a ~3% of gc being run.
	 *
	 * DEFAULT: 30
	 */
	'cache_gc' => 30,
);