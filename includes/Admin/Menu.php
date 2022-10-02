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
        add_menu_page(__('test plugin', 'test_plugin'), __('Academy', 'test_plugin'), 'manage_options', 'test_plugin', [$this, 'plugin_page'], 'dashicons-welcome-learn-more');
    }

    /**
     * Render the plugin page
     *
     * @return void
     */
    public function plugin_page()
    {
        echo 'Hello World';
    }
}
