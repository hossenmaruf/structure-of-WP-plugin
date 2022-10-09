<?php



namespace test\plugin\includes\Frontend;


/**
 * Undocumented class
 */
class Enquiry
{

    function __construct()
    {
        add_shortcode('academy_enquiry', [$this, 'render_shortcode']);
    }

  /**
   * Undocumented function
   *
   * @param [type] $atts
   * @param string $content
   * @return string
   */
    public function render_shortcode($atts, $content = '')
    {

        wp_enqueue_script('academy-enquiry-script');
        wp_enqueue_style('academy-enquiry-style');
    }
}