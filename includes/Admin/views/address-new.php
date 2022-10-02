<div class="wrap">


    <h1> new Address Books </h1>


    <form action="" method="POST">

        <table class="form-table">

            <tbody>
                <tr>
                    <th scope="row">

                        <label> Name </label>
                    </th>

                    <td>
                        <input type="text" name="name" id="name" class="regular-text" value="">
                    </td>

                </tr>


                <tr>
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
                    </td>

                </tr>


            </tbody>

        </table>






        <?php wp_nonce_field('new-address');        ?>

        <?php submit_button(__('Add Address', 'hossenmaruf'), 'primary', 'submit_address'); ?>










    </form>






</div>