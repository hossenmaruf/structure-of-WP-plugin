<?php

namespace test\plugin;

/**
 * Assets handlers class
 */
class Assets
{

    /**
     * Class constructor
     */
    function __construct()
    {
        add_action('wp_enqueue_scripts', [$this, 'register_assets']);
        add_action('admin_enqueue_scripts', [$this, 'register_assets']);
    }

    /**
     * All available scripts
     *
     * @return array
     */
    public function get_scripts()
    {
        return [
            'academy-script' => [
                'src'     => M__ASSETS . '/js/frontend.js',
                'version' => filemtime(M__PATH . '/assets/js/frontend.js'),
                'deps'    => ['jquery']
            ],
            'academy-enquiry-script' => [
                'src'     => M__ASSETS . '/js/enquiry.js',
                'version' => filemtime(M__PATH . '/assets/js/enquiry.js'),
                'deps'    => ['jquery']
            ],
            'academy-admin-script' => [
                'src'     => M__ASSETS . '/js/admin.js',
                'version' => filemtime(M__PATH . '/assets/js/admin.js'),
                'deps'    => ['jquery', 'wp-util']
            ],
        ];
    }

    /**
     * All available styles
     *
     * @return array
     */
    public function get_styles()
    {
        return [
            'academy-style' => [
                'src'     => M__ASSETS . '/css/frontend.css',
                'version' => filemtime(M__PATH . '/assets/css/frontend.css')
            ],
            'academy-admin-style' => [
                'src'     => M__ASSETS . '/css/admin.css',
                'version' => filemtime(M__PATH . '/assets/css/admin.css')
            ],

            'academy-enquiry-style' => [
                'src'     => M__ASSETS . '/css/enquiry.css',
                'version' => filemtime(M__PATH . '/assets/css/enquiry.css')
            ],


        ];
    }

    /**
     * Register scripts and styles
     *
     * @return void
     */
    public function register_assets()
    {
        $scripts = $this->get_scripts();
        $styles  = $this->get_styles();

        foreach ($scripts as $handle => $script) {
            $deps = isset($script['deps']) ? $script['deps'] : false;

            wp_register_script($handle, $script['src'], $deps, $script['version'], true);
        }

        foreach ($styles as $handle => $style) {
            $deps = isset($style['deps']) ? $style['deps'] : false;

            wp_register_style($handle, $style['src'], $deps, $style['version']);
        }



        wp_localize_script('academy-admin-script', 'test', [

            'nonce'   => wp_create_nonce('m_ac_admin_nonce'),
            'confirm' => __('are you sure?', 'hossenmaruf'),
            'error'   => __('something down', 'hossenmaruf'),

        ]);
    }
}