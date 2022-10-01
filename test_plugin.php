<?php


/**
 * Plugin Name
 *
 * @package           PluginPackage
 * @author            hossen maruf
 * @copyright         2022 lampshades
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       test_plugin
 * Plugin URI:        https://example.com/plugin-name
 * Description:       plugin dev project
 * Version:           1.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            hossen maruf
 * Author URI:        https://example.com
 * Text Domain:       test_plugin
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Update URI:        https://example.com/my-plugin/
 */

if (!defined('ABSPATH')) exit;


final class Test_Plugin
{

    const version = '1.0';



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

    public function define_constants()
    {

        define('M_VERSION', self::version);
        define('M_FILE', __FILE__);
        define('M_PATH', __DIR__);
        define('M_URL', plugins_url('',  M_FILE));
        define('M_ASSETS', M_URL . '/assets');
    }



    public function init_plugin()
    {
    }




    public function activate()
    {

        $installed = get_option('m_installed');

        if (!$installed) {


            update_option('m_installed', time());
        }


        update_option('m_version', M_VERSION);
    }
}










function test_plugin()
{
    return Test_Plugin::init();
}

test_plugin();
