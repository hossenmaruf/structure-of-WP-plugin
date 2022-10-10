<?php

namespace test\plugin ;

/**
 * Ajax handler class
 */
  class Ajax {

    /**
     * Class constructor
     */
    function __construct() {
        // add_action( 'wp_ajax_m_academy_enquiry', [ $this, 'submit_enquiry'] );
        // add_action( 'wp_ajax_nopriv_wd_academy_enquiry', [ $this, 'submit_enquiry'] );

        add_action( 'wp_ajax_m-academy-delete-contact', [ $this, 'delete_contact'] );
    }

    /**
     * Handle Enquiry Submission
     *
     * @return void
     */
    // public function submit_enquiry() {

    //     if ( ! wp_verify_nonce( $_REQUEST['_wpnonce'], 'm-ac-enquiry-form' ) ) {
    //         wp_send_json_error( [
    //             'message' => 'Nonce verification failed!'
    //         ] );
    //     }

    //     wp_send_json_success([
    //         'message' => 'Enquiry has been sent successfully!'
    //     ]);
    // }

    /**
     * Handle contact deletion
     *
     * @return void
     */
    public function delete_contact() {
        wp_send_json_success();
    }
}