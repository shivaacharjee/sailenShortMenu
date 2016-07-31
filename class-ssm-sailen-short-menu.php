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

				add_shortcode('ssm-menu', array($this,'display_menus')); 
        	
				add_filter('widget_text', array($this,'is_plugin_shortcode'));
		}

		function is_plugin_shortcode($widget_text) {

			if (strpos($widget_text, 'ssm-menu') !== false) {

				 echo do_shortcode( esc_attr($widget_text) );
			}				    
			
		}
		

		/**
		 * @param array $atts 
		 * @return HTML ENTITIES filter applied 
		 */

		function display_menus($atts) {			

			$default_class=esc_attr($atts['class']); //ul class
			$ul_container=esc_attr($atts['con']);//Container class
			$depth=esc_attr($atts['depth']);//'depth' to specify the level of the hierarchy of the menu list


			if(!isset($atts['class']) || strlen(trim($atts['class']))<=0 ){

				$default_class='sailen_short_menu'; //default class to plugin namesapce
			}

			if(!isset($atts['con']) || strlen(trim($atts['con']))<=0 ){

				$ul_container='sailen_short_menu_con'; //default class to plugin namesapce
			}

			if(!isset($atts['depth']) || strlen(trim($atts['depth']))<=0 ){

				$depth=0; //default depth=0
			}

			$this->menu_identifier= $atts['name'];
			
			return wp_nav_menu( 

						array (
								'menu' => $atts['name'], 
								'menu_class'=> $default_class,
								'echo' => false,
								'container_class'=>$ul_container,
								'depth'=>$depth 
							)
			);				
		}

	}