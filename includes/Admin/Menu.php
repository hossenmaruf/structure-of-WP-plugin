<?php

namespace  test\plugin\Admin;

/**
 * The Menu handler class
 */
class Menu
{

    public $addressbook;


    /**
     * Initialize the class
     */
    function __construct($addressbook)
    {

        $this->addressbook = $addressbook;
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

      $hook =  add_menu_page(__('test plugin', 'test_plugin'), __('TEST', 'test_plugin'), $capability, $paraent_slug, [$this->addressbook, 'plugin_page'], 'dashicons-welcome-learn-more');

        add_submenu_page($paraent_slug, __('Address Book', 'test_plugin'), __('Address Book', 'test_plugin'), $capability,  $paraent_slug, [$this->addressbook, 'plugin_page']);

        add_submenu_page($paraent_slug, __('Settings', 'test_plugin'), __('settings', 'test_plugin'), $capability,  'test-plugin-sittings', [$this, 'settings_page']);
  
       add_action('admin_head-' . $hook, [$this , 'enqeue_assets'] ) ;
  
    }



    public function settings_page()
    {
        echo 'hello from settings';
    }

   public function  enqeue_assets(){

      wp_enqueue_style( 'academy-admin-style') ;
      wp_enqueue_script('academy-admin-script') ;

    
   }



}  