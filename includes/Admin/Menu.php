<?PHP



namespace test\plugin\Admin;


class Menu
{

    function __construct()
    {

        add_action('admin_menu', [$this, 'admin_menu']);
    }


    public function admin_menu()
    {

        add_menu_page(__('test plugin', 'test_plugin'), __('test', 'test_plugin'), 'manage_optains', 'test', [$this, 'plugin_page'], 'dashicons-menu');
    }

    public function plugin_page()
    {

        echo 'hello world';
    }
}
