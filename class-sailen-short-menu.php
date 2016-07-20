<?php

	class Sailen_Short_Menu{
		
		/**
		 *
		 * @var string A unique string prefix  for properties  to avoid conflict
		 */
		public $prefix = 'ssmSavp_';

		function __construct(){

        	add_shortcode('menu', array($this,'ssmSavpDisplaySc')); 
        	  

        }


		/**
		 *
		 * @var string A unique string prefix  for properties  to avoid conflict
		 */


		/**
		 * @param array $atts 
		 * @return HTML ENTITIES filter applied 
		 */
		function ssmSavpDisplaySc($atts) {			
			$def=$atts['class']; //ul class
			$con=$atts['con'];//Container class
			if(!isset($atts['class']) || strlen(trim($atts['class']))<=0 ){
				$def='sailen_short_menu'; //default class to plugin namesapce
			}

			if(!isset($atts['con']) || strlen(trim($atts['con']))<=0 ){
				$con='sailen_short_menu_con'; //default class to plugin namesapce
			}

			return apply_filters('ssmSavpfilter_style',wp_nav_menu( array('menu' => $atts['name'], 'menu_class'=> $def,'echo' => false, 'container_class'=>$con )));
		}



		 
 


	}


 

 