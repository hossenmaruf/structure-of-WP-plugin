<?php
/**
 * Plugin Name: test-plugin
 * Description: A tutorial plugin for weDevs Academy
 * Plugin URI: https://severusmaruf740@gmail.com
 * Author: hossen maruf
 * Author URI: https://severusmaruf740@gmail.com
 * Version: 1.0
 * License: GPL2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

if (!defined('ABSPATH')) {
    exit;
}

require_once __DIR__ . '/vendor/autoload.php';

/**
 * The main plugin class
 */
final class Test_Plugin
{

    /**
     * Plugin version
     *
     * @var string
     */
    const version = '1.0';

    /**
     * Class construcotr
     */
    private function __construct()
    {
        $this->define_constants();

        register_activation_hook(__FILE__, [$this, 'activate']);

        add_action('plugins_loaded', [$this, 'init_plugin']);
    }


    public static function init()
    {
        static $instance = false;

        if (!$instance) {
            $instance = new self();
        }

        return $instance;
    }

    /**
     * Define the required plugin constants
     *
     * @return void
     */
    public function define_constants()
    {
        define('M_VERSION', self::version);
        define('M__FILE', __FILE__);
        define('M__PATH', __DIR__);
        define('M__URL', plugins_url('', M__FILE));
        define('M__ASSETS', M__URL . '/assets');
    }

    /**
     * Initialize the plugin
     *
     * @return void
     */
    public function init_plugin()
    {

        if (is_admin()) {
            new test\plugin\Admin();
        } else {
            new test\plugin\Frontend();
        }
    }

    /**
     * Do stuff upon plugin activation
     *
     * @return void
     */
    public function activate()
    {

        $installer =  new \test\plugin\installer();

        $installer->run();
    }
}

/**
 * Initializes the main plugin
 *
 * @return \Test_plugins
 */
function test_plugin()
{
    return Test_Plugin::init();
}

// kick-off the plugin
test_plugin();
