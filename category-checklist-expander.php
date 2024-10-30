<?php
/*
Plugin Name: Category Checklist Expander
Description: Shows <em>all</em> the categories in the checklist on the post editing screen
Version: 1.0.1
Plugin URI: http://txfx.net/wordpress-plugins/category-checklist-expander/
Author: Mark Jaquith
Author URI: http://coveredwebservices.com/
*/

/*
    Copyright 2009-2012 Mark Jaquith (email: mark.gpl@txfx.net)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

function cws_category_checklist_expander_css() {
	global $wp_version, $pagenow;
	if ( !in_array( $pagenow, array( 'post.php', 'post-new.php' ) ) )
		return;
	$tabs_panel = ( version_compare( $wp_version, '2.7.9', '<' ) ) ? 'ui-tabs-panel' : 'tabs-panel'; // class name changed in 2.8
?>
<style>
#categorydiv div.<?php echo $tabs_panel; ?>, #linkcategorydiv div.<?php echo $tabs_panel; ?> { height: auto; max-height: none; }
</style>
<?php
}

add_action( 'admin_head', 'cws_category_checklist_expander_css' );
