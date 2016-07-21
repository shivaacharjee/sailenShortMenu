<?php

	class Sailen_Short_Menu{
		
		/**
		 *
		 * @var string A unique string prefix  for properties  to avoid conflict
		 */
		private $prefix = 'ssmSavp_';
		private $menu_identifier='';


		function __construct(){

        	add_shortcode('menu', array($this,'ssmSavpDisplaySc')); 
        	add_filter( 'widget_text', 'shortcode_unautop' );
			add_filter( 'widget_text', 'do_shortcode' );
        	  

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
			$def=esc_attr($atts['class']); //ul class
			$con=esc_attr($atts['con']);//Container class
			$depth=esc_attr($atts['depth']);//'depth' to specify the level of the hierarchy of the menu list


			if(!isset($atts['class']) || strlen(trim($atts['class']))<=0 ){
				$def='sailen_short_menu'; //default class to plugin namesapce
			}

			if(!isset($atts['con']) || strlen(trim($atts['con']))<=0 ){
				$con='sailen_short_menu_con'; //default class to plugin namesapce
			}

			if(!isset($atts['depth']) || strlen(trim($atts['depth']))<=0 ){
				$depth=0; //default depth=0
			}

			$this->menu_identifier= $atts['name'];
			$this->ssmSavpReturnMenuItemInfo();

			return apply_filters('ssmSavpfilter_html',wp_nav_menu( array('menu' => $atts['name'], 
								'menu_class'=> $def,
								'echo' => false,
								'container_class'=>$con,
								'depth'=>$depth )
			));
		}



		/**
		 * @return Array  
		 */

			function ssmSavpReturnMenuItemInfo(){
									 
					$ssmRetArr=array();
					$ssmSavpArrMenu= wp_get_nav_menu_items( $this->menu_identifier, array( 'order' => 'DESC' ));
					$ssmSavpArrMenu=json_decode(json_encode($ssmSavpArrMenu),TRUE);
					
					foreach ($ssmSavpArrMenu as $arrTemp) {
					    array_push($ssmRetArr,$arrTemp['title']);
					}
					
					return apply_filters('ssmSavpMenuArray',$ssmRetArr);
				

			}			 
 


	}


 

 