=== Sailen Short Menu ===
Tags:  display menu in widget using shortcode, display menu using shortcodes in posts., shortcode, shortcode in widget, shortcode widget, Shortcodes In Widgets, use plugin shortcode in widget, menu by name, menu shortcode, display menu
stable tag: trunk
Contributors: shivaacharjee
Requires at least: 3.7
Tested up to: 4.5.2 
License: MIT
License URI: https://opensource.org/licenses/MIT


Sailen Short Menu is a simple plugin which allow users to display nav-menus within post/pages and Sidebars using Shortcodes

== Description ==

Sailen Short Menu is a simple plugin which allow users to display nav-menus within post/pages and Sidebars using Shortcodes

= Using Shortcode =

[ssm-menu name="YOUR_MENU_NAME" class="CLASS_FOR_UL_TAG" con="CLASS_FOR_THE_CONTAINER" depth="LEVEL" ]

<u>The Shortcode can also be included within the Widget area and sidebars </u>

* YOUR_MENU_NAME [Name of the Menu created by you][Required]

* CLASS_FOR_UL_TAG [If yu want to provide a different class for the Ul tag. Default is assigned] [Optional]

* CLASS_FOR_THE_CONTAINER [If yu want to provide a different class for the container for Ul tag. Default is assigned] [Optional]

* LEVEL [Numeric value to define the level of hierarchy of the MenuItems. Default is 0] [Optional]

 


== Installation ==
 

1. Upload the plugin files to the `/wp-content/plugins/sailenseo` directory, or install the plugin through the WordPress plugins screen directly.
1. Activate the plugin through the 'Plugins' screen in WordPress
2. Use the Settings->Sailenseo screen to configure the plugin



== Frequently Asked Questions ==

= What is Shortcode? =
The Shortcode API is a simple set of functions for creating WordPress shortcodes for use in posts and pages. For instance, the following shortcode (in the body of a post or page) would add a photo gallery of images attached to that post or page: [gallery]

The API enables plugin developers to create special kinds of content (e.g. forms, content generators) that users can attach to certain pages by adding the corresponding shortcode into the page text.


 

== Screenshots ==

1. Display within contents
2. Using TextWidgets
3. At sidebar

== Contribute ==

= Github =
https://github.com/shivaacharjee/sailenShortMenu

== Changelog ==

= 1.0 =
* Initial Realease