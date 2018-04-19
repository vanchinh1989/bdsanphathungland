<?php
/**
 * Plugin Name: Thông tin liên hệ
 * Plugin URI: http://gisoft.vn
 * Description: Thiết lập thông tin liên hệ
 * Version: 1.0 
 * Author: ChinhBV
 * Author URI: http://gisoft.vn
 * License: GPLv2
 */

function register_mysettings() {
        register_setting( 'gi-settings-contactinfo-group', 'gi_option_diachi' );
        register_setting( 'gi-settings-contactinfo-group', 'gi_option_hotline' );
        register_setting( 'gi-settings-contactinfo-group', 'gi_option_hotline1' );
        register_setting( 'gi-settings-contactinfo-group', 'gi_option_email' );
        register_setting( 'gi-settings-contactinfo-group', 'gi_option_googlemap' );
}
 
function gi_create_menu() {
        add_menu_page('Thông tin liên hệ', 'Thông tin liên hệ', 'administrator', __FILE__, 'gi_settings_page',plugins_url('/images/icon.png', __FILE__), 59  );
        add_action( 'admin_init', 'register_mysettings' );
}
add_action('admin_menu', 'gi_create_menu'); 
 
function add_roles_on_plugin_activation() {
    add_role( 'editor', 'Thông tin liên hệ', array( 'read' => true, 'level_0' => true, 'manage_options' => true ) );
}
register_activation_hook( __FILE__, 'add_roles_on_plugin_activation' );

function gi_settings_page() {
?>
<div class="wrap">
<h2>Thiết lập thông tin liên hệ</h2>
<?php if( isset($_GET['settings-updated']) ) { ?>
    <div id="message" class="updated">
        <p><strong><?php _e('Settings saved.') ?></strong></p>
    </div>
<?php } ?>
<form method="post" action="options.php">
    <?php settings_fields( 'gi-settings-contactinfo-group' ); ?>
    <table class="form-table">
        <tr valign="top">
            <th scope="row">Địa chỉ</th>
            <td><input type="text" name="gi_option_diachi" value="<?php echo get_option('gi_option_diachi'); ?>" /></td>
        </tr>
        <tr valign="top">
            <th scope="row">Hotline</th>
            <td><input type="text" name="gi_option_hotline" value="<?php echo get_option('gi_option_hotline'); ?>" /></td>
        </tr>
        <tr valign="top">
            <th scope="row">Hotline 1</th>
            <td><input type="text" name="gi_option_hotline1" value="<?php echo get_option('gi_option_hotline1'); ?>" /></td>
        </tr>
        <tr valign="top">
            <th scope="row">Email</th>
            <td><input type="text" name="gi_option_email" value="<?php echo get_option('gi_option_email'); ?>" /></td>
        </tr>
        <tr valign="top">
            <th scope="row">Google Map</th>
            <td><textarea type="text" name="gi_option_googlemap"><?php echo get_option('gi_option_googlemap'); ?></textarea></td>
        </tr>
    </table>
    <?php submit_button(); ?>
</form>
</div>
<?php } ?>