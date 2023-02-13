<?php

/**
 * Plugin Name: Allow Editors in UpdraftPlus admin
 * Plugin URI: https://github.com/MaelImhof/updraftplus-perms
 * Description: By default, only admins can access the dashboard of UpdraftPlus on Wordpress. This plugin makes it so that editors can also access it to backup the website
 *
 * Version: 1.0.0.0
 * Author: Maël Imhof
 * Author URI: https://www.mael.im
 *
 * License: AGPLv3
 * License URI: https://choosealicense.com/licenses/agpl-3.0/#
 *
 * Update URI: not-wordpress.org
 */

if (!function_exists('updraftplus_unofficial_addon_authorize_editors_in_updraftplus')) {

    /**
     * This function will be called whenever the UpdraftPlus plugin wonders whether it should
     * display its admin page or not, depending on the user's permissions
     *
     * @param string $permission The current required permission for UpdraftPlus to display its admin
     * @return string The new required permission to display UpdraftPlus admin
     */
    function updraftplus_unofficial_addon_authorize_editors_in_updraftplus($permission) {

        /*
         * moderate_comments is one of the permissions that Editors have
         * by default on Wordpress but Authors, Contributors and Subscribers
         * don't have by default.
         *
         * This is used here as a way to determine if the connected user is
         * an editor
         *
         * (See https://wordpress.org/documentation/article/roles-and-capabilities/#editor)
         */
        return 'moderate_comments';
    }

    add_filter( 'option_page_capability_updraft-options-group', 'updraftplus_unofficial_addon_authorize_editors_in_updraftplus', 20);

}