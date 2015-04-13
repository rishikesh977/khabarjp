<?php 
function wpr_remove_editor_menu() {
  remove_action('admin_menu', '_add_themes_utility_last', 101);
}

global $remove_submenu_page, $current_user;
get_currentuserinfo();
if($current_user->user_login == 'suu') { //Specify admin name here
    add_action('admin_menu', 'wpr_remove_editor_menu', 1);
}