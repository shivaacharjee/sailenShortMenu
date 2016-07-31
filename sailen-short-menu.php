<?php

/**
 * @package Sailen Short Menu
 */
/*
Plugin Name: Sailen Short Menu
Plugin URI: https://github.com/shivaacharjee/sailenShortMenu
Author: Shiva Acharjee
Author URI: https://www.shivaacharjee.com
Description: <strong>Sailen Short Menu</strong> is a simple plugin 
which allow users to display nav-menus within post/pages and Sidebars using Shortcodes
Version: 1.0
License: MIT
*/
/* The MIT License (MIT)

Copyright (c) 2016 Shiva Acharjee

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
*/

//Checks if the class has been defined
if (!class_exists('Ssm_Sailen_Short_Menu')) {

	// File 'class-ssm-sailen-short-menu.php' included 
	include_once (plugin_dir_path( __FILE__ ).'class-ssm-sailen-short-menu.php');

	//class 'Ssm_Sailen_Short_Menu' initated with __construct
	new Ssm_Sailen_Short_Menu();	
}