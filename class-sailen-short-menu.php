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
		function ssmSavpDisplaySc($atts, $menu_class='ssmSavp_menu') {
			

			return apply_filters('ssmSavpfilter_style',wp_nav_menu( array( 'menu' => $atts['name'], 'menu_class'=>$menu_class,'echo' => false )));
		}

 


	}




 