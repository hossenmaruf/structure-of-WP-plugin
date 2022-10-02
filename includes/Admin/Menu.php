<?php

namespace  test\plugin\Admin;

/**
 * The Menu handler class
 */
class Menu
{

    /**
     * Initialize the class
     */
    function __construct()
    {
        add_action('admin_menu', [$this, 'admin_menu']);
    }

    /**
     * Register admin menu
     *
     * @return void
     */
    public function admin_menu()
    {
        $paraent_slug = 'test_plugin';
        $capability = 'manage_options';

        add_menu_page(__('test plugin', 'test_plugin'), __('TEST', 'test_plugin'), $capability, $paraent_slug, [$this, 'addressbook_page'], 'dashicons-welcome-learn-more');

        add_submenu_page($paraent_slug, __('Address Book', 'test_plugin'), __('Address Book', 'test_plugin'), $capability,  $paraent_slug, [$this, 'addressbook_page']);

        add_submenu_page($paraent_slug, __('Settings', 'test_plugin'), __('settings', 'test_plugin'), $capability,  'test-plugin-sittings', [$this, 'settings_page']);
    }

    /**
     * Render the plugin page
     *
     * @return void
     */

    public function addressbook_page()
    {

        $addressbook = new Addressbook();
        $addressbook->plugin_page();
    }



    public function settings_page()
    {
        echo 'hello from settings';
    }
}
