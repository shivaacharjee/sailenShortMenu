<?php

/**
 * Create Shortcode and display menu in un-ordered list
 *
 * Consist of  Ssm_Sailen_Short_Menu class
 * with a construtor for the base class responsible for 
 * calling two member functions. 
 *
 * @package Sailen Short Menu
 * @since 1.0
 */
	class Ssm_Sailen_Short_Menu {		

		
		function __construct() {

				//adding shortcode which point to member function 'display_menus'
				add_shortcode('ssm-menu', array($this,'display_menus')); 
        		
        		//Filter  which point to member function 'is_plugin_shortcode'
				add_filter('widget_text', array($this,'is_plugin_shortcode'));
		}

		/**
		 * @param String $widget_text 
		 * @return Shortcode content
		 */

		function is_plugin_shortcode($widget_text) {

			//if the shortcode belong to this plugin 
			if (strpos($widget_text, 'ssm-menu') !== false) {

				//executing and generating output for the given shortcode
				 echo do_shortcode( esc_attr($widget_text) );
			}				    
			
		}
		

		/**
		 * @param array $param 
		 * @return Menu Items as HTML entities 
		 */

		function display_menus($param) {			

			//Sanatizing and storing custom class name provided in shortcode for ul tag
			$supplied_class=esc_attr($param['class']); 

			//Sanatizing and storing custom class name provided in shortcode for the container of Ul tag
			$ul_container=esc_attr($param['con']);

			//Sanatizing and storing depth in for menus provided in shortcode
			$depth=esc_attr($param['depth']);

			//if  class name for ul tag not provided, setting default class 
			if(!isset($param['class']) || strlen(trim($param['class']))<=0 ){

				$supplied_class='sailen_short_menu'; //default class to plugin namesapce
			}

			//if  class name for ul tag container not provided, setting default class
			if(!isset($param['con']) || strlen(trim($param['con']))<=0 ){

				$ul_container='sailen_short_menu_con'; //default class to plugin namesapce
			}

			//if depth for menus not provided, setting default with 0
			if(!isset($param['depth']) || strlen(trim($param['depth']))<=0 ){

				$depth=0; //default depth=0
			}

			//calling wp_nav_menu with supplied parameters 	
			return wp_nav_menu ( 

						array (
								'menu' => $param['name'], 
								'menu_class'=> $supplied_class,
								'echo' => false,
								'container_class'=>$ul_container,
								'depth'=>$depth 
							)
			);				
		}

	}