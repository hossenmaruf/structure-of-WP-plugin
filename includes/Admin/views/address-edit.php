<div class="wrap">


    <h1> <?php _e('Edit Address', 'hossenmaruf')  ?> </h1>


    <?php if (isset($_GET['address-updated'])) { ?>

        <div class="notice notice-success">

            <p> <?php _e('Address has been updated', 'hossenmaruf') ?> </p>

        </div>

    <?php } ?>



    <form action="" method="POST">

        <table class="form-table">

            <tbody>

                <!-- form-invalid is not working  -->

                <tr class="row<?php echo $this->has_error('name') ? ' form-invalid' : ''; ?>">
                    <th scope="row">

                        <label> Name </label>
                    </th>

                    <td>
                        <input type="text" name="name" id="name" class="regular-text" value="<?php echo esc_attr($address->name); ?>">

                        <?php if ($this->has_error('name')) { ?>
                            <p class="description error"><?php echo $this->get_error('name'); ?> </p>
                        <?php } ?>

                    </td>

                </tr>

                <tr class="row<?php echo $this->has_error('phone') ? 'color : red ' : ''; ?>">
                    <th scope="row">

                        <label> Address </label>
                    </th>

                    <td>
                        <textarea class="regular-text" name="address" id="address"><?php echo esc_textarea($address->address); ?></textarea>
                    </td>

                </tr>
                <tr>
                    <th scope="row">

                        <label> Phone </label>
                    </th>

                    <td>
                        <input type="text" name="phone" id="phone" class="regular-text" value="<?php echo esc_attr($address->phone); ?>">

                        <?php if ($this->has_error('phone')) { ?>
                            <p class="description error"><?php echo $this->get_error('phone'); ?> </p>
                        <?php } ?>

                    </td>

                </tr>

            </tbody>

        </table>


        <input type="hidden" name="id" value="<?php echo esc_attr($address->id); ?>">


        <?php wp_nonce_field('new-address');        ?>

        <?php submit_button(__('UpdaTE Address', 'hossenmaruf'), 'primary', 'submit_address'); ?>


    </form>

</div>