<?php
/*
Plugin Name: SailenShortMenu
Plugin URI: https://github.com/shivaacharjee/sailenShortMenu
Author: Shiva Acharjee
Author URI: https://www.shivaacharjee.com
Description: Nav Menu and Shortcode
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

function ssm_outls($attributes) {    
    var_dump($attributes['name'].'1');
    return wp_nav_menu( array( 'menu' => $attributes['name'],'menu_class'=>'ssm_style' ,'echo' => false ) );
}
add_shortcode('ssm', 'ssm_outls');
?>

<style type="text/css">
.ssm_style{

	color:#F44336  !important;

}

</style>