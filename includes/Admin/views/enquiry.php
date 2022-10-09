<div class="m-enquiry-form" id="m-enquiry-form">

    <form action="" method="post">

        <div class="form-row">
            <label for="name"><?php _e( 'Name', 'hossenmaruf' ); ?></label>

            <input type="text" id="name" name="name" value="" required>
        </div>

        <div class="form-row">
            <label for="email"><?php _e( 'E-Mail', 'hossenmaruf' ); ?></label>

            <input type="email" id="email" name="email" value="" required>
        </div>

        <div class="form-row">
            <label for="message"><?php _e( 'Message', 'hossenmaruf' ); ?></label>

            <textarea name="message" id="message" required></textarea>
        </div>

        <div class="form-row">

            <?php wp_nonce_field( 'm-ac-enquiry-form' ); ?>

            <input type="hidden" name="action" value="m_academy_enquiry">
            <input type="submit" name="send_enquiry" value="<?php esc_attr_e( 'Send Enquiry', 'hossenmaruf' ); ?>">
        </div>

    </form>
</div>