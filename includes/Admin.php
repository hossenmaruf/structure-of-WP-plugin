<?php

namespace test\plugin;

/**
 * The admin class
 */
class Admin
{

    /**
     * Initialize the class
     */
    function __construct()
    {

        $addressbook = new Admin\Addressbook();
        $this->dispatch_action($addressbook);
        new Admin\Menu($addressbook);
    }


    public function dispatch_action($addressbook)
    { 

        add_action('admin_init', [$addressbook, 'form_handler']);
        add_action('admin_post_m-ac-delete-address', [$addressbook, 'delete_address']);
    }
}