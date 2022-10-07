<div class="wrap">


    <h1> <?php _e('New Address', 'hossenmaruf')  ?> </h1>

    <!-- <?php var_dump($this->errors);    ?> -->


    <form action="" method="POST">

        <table class="form-table">

            <tbody>

                <!-- form-invalid is not working  -->

                <tr class="row<?php echo $this->has_error('name') ? ' form-invalid' : ''; ?>">
                    <th scope="row">

                        <label> Name </label>
                    </th>

                    <td>
                        <input type="text" name="name" id="name" class="regular-text" value="">

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
                        <textarea class="regular-text" name="address" id="address"></textarea>
                    </td>

                </tr>
                <tr>
                    <th scope="row">

                        <label> Phone </label>
                    </th>

                    <td>
                        <input type="text" name="phone" id="phone" class="regular-text" value="">

                        <?php if ($this->has_error('phone')) { ?>
                            <p class="description error"><?php echo $this->get_error('phone'); ?> </p>
                        <?php } ?>


                    </td>

                </tr>


            </tbody>

        </table>


        <?php wp_nonce_field('new-address');        ?>

        <?php submit_button(__('Add Address', 'hossenmaruf'), 'primary', 'submit_address'); ?>




    </form>

</div>