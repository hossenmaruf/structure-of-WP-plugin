<?php


namespace test\plugin\Admin;

class Addressbook
{


    function plugin_page()
    {



        $action = isset($_GET['action']) ? $_GET['action'] : 'list';


        switch ($action) {


            case 'new':
                $template = __DIR__ . '/views/address-new.php';
                break;

            case 'edit':
                $template = __DIR__ . '/views/address-edit.php';
                break;

            case 'views':
                $template = __DIR__ . '/views/address-view.php';
                break;

            default:

                $template = __DIR__ . '/views/address-list.php';
                break;
        }



        if (file_exists($template)) {
            include $template;
        }
    }


    public function form_handler()
    {

        if (!isset($_POST['submit_address'])) {
            return;
        }

        if (!wp_verify_nonce($_POST['_wpnonce'], 'new-address')) {
            wp_die('who are you?');
        }

        if (!current_user_can('manage_options')) {
            wp_die('who are you?');
        }


        var_dump($_POST);
        exit;
    }
}
